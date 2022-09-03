<?php

namespace App\Repositories;

use App\Models\Evidence;

class EvidenceRepository
{
    protected $evidence;

    public function __construct(Evidence $evidence){
        $this->evidence = $evidence;
    }

    public function all()
    {
        return $evidence = $this->evidence->all(); 
    }

    public function insert($data)
    {
        return $this->evidence->create($data);
    }

    public function update($data, $id)
    {
        return evidence::where('id', $id)->update($data);
    }

    public function getById($id){
        return evidence::where('evidences.id', $id)->get();
    }

    public function getByCaseId($id){
        return evidence::where('evidences.case_id', $id)->get();
    }

    public function delete($id)
    {
        $retrievedEvidence = $this->evidence->find($id);
        if(!$retrievedEvidence){
            return $retrievedEvidence;
        }
        return $retrievedEvidence->delete();
    }

}