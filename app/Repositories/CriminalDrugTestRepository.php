<?php

namespace App\Repositories;

use App\Models\CriminalDrugTest;

class CriminalDrugTestRepository
{

    public function all()
    {
        return CriminalDrugTest::all(); 
    }

    public function insert($data)
    {
        return CriminalDrugTest::create($data);
    }

    public function update($data, $id)
    {
        return CriminalDrugTest::where('id', $id)->update($data);
    }

    public function getById($id){
        return CriminalDrugTest::where('criminal_drug_testS.id', $id)->get();
    }

    public function getByCaseNo($caseNo){
        return CriminalDrugTest::where('criminal_drug_testS.case_no', $caseNo)->first();
    }

    public function delete($id)
    {
        $result = CriminalDrugTest::find($id);
        if(!$result){
            return $result;
        }
        return $result->delete();
    }

}