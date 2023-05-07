<?php

namespace App\Repositories;

use App\Models\Suspect;

class SuspectRepository
{
    protected $suspect;

    public function __construct(Suspect $suspect){
        $this->person = $suspect;
    }

    public function all()
    {
        return $file = $this->person->all(); 
    }

    public function insert($data)
    {
        return $this->person->create($data);
    }

    public function update($data, $id)
    {
        return Suspect::where('id', $id)->update($data);
    }

    public function getById($id){
        return Suspect::where('persons.id', $id)->get();
    }

    public function getByCaseId($caseId){
        return Suspect::where('case_id', $caseId)->get();
    }

    public function delete($id)
    {
        $result = $this->person->find($id);
        if(!$result){
            return $result;
        }
        return $result->delete();
    }

}