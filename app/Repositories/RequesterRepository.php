<?php

namespace App\Repositories;

use App\Models\Requester;

class RequesterRepository
{
    protected $requester;

    public function __construct(Requester $requester){
        $this->requester = $requester;
    }

    public function all()
    {
        return $this->requester->all(); 
    }

    public function insert($data)
    {
        return $this->requester->create($data);
    }

    public function update($data, $id)
    {
        return Requester::where('id', $id)->update($data);
    }

    public function getById($id){
        return Requester::where('requesters.id', $id)->get();
    }

    public function delete($id)
    {
        $result = $this->requester->find($id);
        if(!$result){
            return $result;
        }
        return $result->delete();
    }

}