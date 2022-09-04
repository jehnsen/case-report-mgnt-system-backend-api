<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository
{
    protected $person;

    public function __construct(Person $person){
        $this->person = $person;
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
        return Person::where('id', $id)->update($data);
    }

    public function getById($id){
        return Person::where('persons.id', $id)->get();
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