<?php

namespace App\Repositories;

use App\Models\Incident;
use App\Models\Evidence;
use App\Models\File;
use App\Models\Suspect;
use App\Models\Victim;

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
        File::where('case_id', 0)->update(['case_id' => $newRecord->id]);

        return $newRecord;
    }

    public function update($data, $id)
    {
        $updatedIncident = Incident::where('id', $id)->update($data);

        // $_arr = [];
        // $evidences = $data['evidences'];
        // if (count($evidences) > 0) {
        //     foreach ($evidences as $prop ) {
        //         array_push($_arr, array(
        //             'case_id'     => $newRecord->id,
        //             'description' => $prop
        //         ));
        //     }
        //     Evidence::insert($_arr);
        // }
        
        // Victim::where('status', 0)->update(['case_id' => $id]);
        // Victim::where('status', 0)->update(['status' => 1]);
        // Suspect::where('status', 0)->update(['case_id' => $id]);
        // Suspect::where('status', 0)->update(['status' => 1]);
        // File::where('case_id', 0)->update(['case_id' => $id]);
        
        return $updatedIncident;
    }

    public function getById($id){
        $incident = Incident::where('incidents.id', $id)->get();
        $evidences = Evidence::where('evidences.case_id', $id)->get();
        
        $response = (object)[
            'data'  => (object)$incident,
            'evidences' => $evidences
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

}