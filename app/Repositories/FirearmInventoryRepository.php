<?php

namespace App\Repositories;

use App\Models\FirearmInventory;

class FirearmInventoryRepository 
{
    public function __construct(){

    }

    public function all()
    {
        return FirearmInventory::all(); 
    }

    public function insert($data)
    {
        return $data;
        // return FirearmInventory::create($data);
    }

    public function update($data, $id)
    {
        return FirearmInventory::where('id', $id)->update($data);
    }

    public function getById($id){
        return FirearmInventory::find($id);
    }

    public function getByCaseNo($caseNo){
        return FirearmInventory::where('firearminventory.case_no', $caseNo)->first();
    }

    public function delete($id)
    {
        $inventory = FirearmInventory::find($id);
        if(!$inventory){
            return $inventory;
        }
        return $inventory->delete();
    }

}