<?php

namespace App\Repositories;

use App\Models\Incident;


class IncidentRepository
{
    protected $incident;

    public function __construct(Incident $incident){
        $this->incident = $incident;
    }

    public function all()
    {
        $incidentData = $this->incident->all();
        return $incidentData; //$this->customer->all();
    }

    public function insert($data)
    {
        // customer main info
        $newRecord = $this->incident->create($data);

        // // evidence for this case/incident
        // $empDetails = $data['employment_details'];
        // $customerEmploymentDetail = CustomerEmploymentDetail::create([
        //     'case_id'               => $newRecord->id,
        //     'evidence_description'  => $empDetails['employer'],      
        // ]);


        return $newRecord;

    }

    public function update($data, $id)
    {
        $selectIncident = $this->incident->find($id);

        if(!$selectIncident)
        {
            return $selectIncident;
        }

        $selectIncident->update($data);
        // $customerEmploymentDetail = CustomerEmploymentDetail::where('customer_id', $id)->update($data['employment_details']);
        
        return $selectIncident;

        
    }
}