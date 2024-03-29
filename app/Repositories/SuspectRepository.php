<?php

namespace App\Repositories;

use App\Models\Suspect;

class SuspectRepository
{
    protected $suspect;

    public function __construct(Suspect $suspect){
        $this->suspect = $suspect;
    }

    public function all()
    {
        return $this->suspect->all(); 
    }

    public function insert($data)
    {
        return $this->suspect->create($data);
    }

    public function update($data, $id)
    {
        return Suspect::where('id', $id)->update($data);
    }

    public function getById($id){
        return Suspect::where('suspects.id', $id)->get();
    }

    public function getByCaseId($caseId){
        return Suspect::where('case_id', $caseId)->get();
    }

    public function delete($id)
    {
        $result = $this->suspect->find($id);
        if(!$result){
            return $result;
        }
        return $result->delete();
    }

}