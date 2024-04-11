<?php

namespace App\Repositories;

use App\Models\Incident;
use App\Models\Evidence;
use App\Models\File;
use App\Models\Suspect;
use App\Models\Victim;
use App\Models\Firearm;

class IncidentRepository
{
    protected $incident;
    protected $evidence;

    public function __construct(Incident $incident){
        $this->incident = $incident;
    }

    public function all()
    {
        $incidentData = $this->incident->all();
        return $incidentData; 
    }

    public function insert($data)
    {
        $newCaseNo = json_decode(json_encode($data))->case_no;
        $existingRecord = Incident::where('incidents.case_no', $newCaseNo)->first();
        if($existingRecord){
            return json_decode(json_encode($existingRecord));
        }

        // case main info
        $newRecord = $this->incident->create($data);

        // save the evidences for this case/incident
        $_arr = [];
        $evidences = $data['evidences'];
        foreach ($evidences as $prop ) {
            array_push($_arr, array(
                'case_id'     => $newRecord->id,
                'description' => $prop
            ));
        }
        Evidence::insert($_arr);

        Victim::where('status', 0)->update(['case_id' => $newRecord->id]);
        Victim::where('status', 0)->update(['status' => 1]);

        Suspect::where('status', 0)->update(['case_id' => $newRecord->id]);
        Suspect::where('status', 0)->update(['status' => 1]);

        Firearm::where('case_no', 'new')->update(['case_no' => $newRecord->id]);
        Firearm::where('case_id', 0)->update(['case_id' => $newRecord->id]);

        File::where('case_id', 0)->update(['case_id' => $newRecord->id]);

        return $newRecord;
    }

    public function update($data, $id)
    {
        
        $updatedIncident = Incident::where('id', $id)->update($data['incident']);

        // save the evidences for this case/incident
        $_arr = [];
        $evidences = $data['evidences'];
        foreach ($evidences as $evidence ) {
            array_push($_arr, array(
                'case_id'     => $id,
                'description' => $evidence['description']
            ));
        }
        // delete all evidence related to this record
        Evidence::whereIn('case_id', (array)$id)->delete();
        // then save the new evidences
        Evidence::insert($_arr);
        
       
        Victim::where('status', 0)->update(['case_id' => $id]);
        Victim::where('status', 0)->update(['status' => 1]);
        Suspect::where('status', 0)->update(['case_id' => $id]);
        Suspect::where('status', 0)->update(['status' => 1]);
        File::where('case_id', 0)->update(['case_id' => $id]);
        Firearm::where('case_id', 0)->update(['case_id' => $id]);
        
        return $updatedIncident;
    }

    public function getById($id){
        $incident = Incident::where('incidents.id', $id)->get();
        $evidences = Evidence::where('evidences.case_id', $id)->get();
        $suspects = Suspect::where('suspects.case_id', $id)->get();
        $victims = Victim::where('victims.case_id', $id)->get();
        $files = File::where('files.case_id', $id)->get();
        $firearms = Firearm::where('firearms.case_id', $id)->get();

        $response = (object)[
            'data'  => (object)$incident,
            'evidences' => $evidences,
            'suspects' => $suspects,
            'victims' => $victims,
            'files' => $files,
            'firearms' => $firearms
        ];

        return $response;
    }

    public function getByCaseNo($caseNo){
        $incident = Incident::where('incidents.case_no', $caseNo)->get();
       
        $response = (object)$incident;

        return $response;
    }

    public function delete($id)
    {
        $incident = $this->incident->find($id);
        if(!$incident){
            return $incident;
        }
        return $incident->delete();
    }

    public function cleanEntry()
    {
        Suspect::whereIn('case_id',[0])->delete();
        Victim::whereIn('case_id',[0])->delete();
        File::whereIn('case_id',[0])->delete();
    }

}