<?php

namespace App\Repositories;

use App\Models\Victim;

class VictimRepository
{
    protected $victim;

    public function __construct(Victim $victim){
        $this->victim = $victim;
    }

    public function all()
    {
        return $this->victim->all(); 
    }

    public function insert($data)
    {
        return $this->victim->create($data);
    }

    public function update($data, $id)
    {
        return Victim::where('id', $id)->update($data);
    }

    public function getById($id){
        return Victim::where('id', $id)->get();
    }

    public function getByCaseId($caseId){
        return Victim::where('case_id', $caseId)->get();
    }

    public function delete($id)
    {
        $result = $this->victim->find($id);
        if (!$result) {
            return $result;
        }
        return $result->delete();
    }

}