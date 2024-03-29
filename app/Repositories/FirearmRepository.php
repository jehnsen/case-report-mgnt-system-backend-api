<?php

namespace App\Repositories;

use App\Models\Firearm;

class FirearmRepository 
{
    public function __construct(){

    }

    public function all()
    {
        return Firearm::all(); 
    }

    public function insert($data)
    {
        // return $data;
        return Firearm::create($data);
    }

    public function update($data, $id)
    {
        return Firearm::where('id', $id)->update($data);
    }
    
    public function getByCaseId($case_id){
        return Firearm::where('firearms.case_id', $case_id)->get();
    }

    public function getByCaseNo($case_no){
        return Firearm::where('firearms.case_no', $case_no)->get();
    }

    public function getByName($case_no, $name){
        return Firearm::where('firearms.case_no', $case_no)->where('firearms.firearm_name', $name)->first();
    }

    public function delete($id)
    {
        $inventory = Firearm::find($id);
        if(!$inventory){
            return $inventory;
        }
        return $inventory->delete();
    }

}