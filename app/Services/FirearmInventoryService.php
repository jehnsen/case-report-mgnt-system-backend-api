<?php

namespace App\Services;
use App\Repositories\FirearmInventoryRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class FirearmInventoryService {
   
    protected $firearmInventoryRepository; 

    public function __construct(FirearmInventoryRepository $firearmInventoryRepository)
    {
        $this->firearmInventoryRepository = $firearmInventoryRepository;
    }

    public function all()
    {
        return $this->firearmInventoryRepository->all();
    }

    public function insert($data)
    {
        return $this->firearmInventoryRepository->insert($data);
    }

    public function update($data, $id)
    {
        return $this->firearmInventoryRepository->update($data, $id);
    }

    public function getById($id)
    {
        return $this->firearmInventoryRepository->getById($id);
    }

    public function getByCaseNo($caseNo){
        return $this->firearmInventoryRepository->getByCaseNo($caseNo);
    }

    public function delete($id)
    {
        return $this->firearmInventoryRepository->delete($id);
    }
}