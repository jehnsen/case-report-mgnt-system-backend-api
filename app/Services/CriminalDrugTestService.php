<?php

namespace App\Services;
use App\Repositories\CriminalDrugTestRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CriminalDrugTestService {
   
    protected $criminalDrugTestRepository; 

    public function __construct(CriminalDrugTestRepository $criminalDrugTestRepository)
    {
        $this->criminalDrugTestRepository = $criminalDrugTestRepository;
    }

    public function all()
    {
        return $this->criminalDrugTestRepository->all();
    }

    public function insert($data)
    {
        return $this->criminalDrugTestRepository->insert($data);
    }

    public function update($data, $id)
    {
        return $this->criminalDrugTestRepository->update($data, $id);
    }

    public function getById($id)
    {
        return $this->criminalDrugTestRepository->getById($id);
    }

    public function getByCaseNo($caseNo){
        return $this->criminalDrugTestRepository->getByCaseNo($caseNo);
    }

    public function delete($id)
    {
        return $this->criminalDrugTestRepository->delete($id);
    }
}