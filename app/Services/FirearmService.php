<?php
namespace App\Services;
use App\Repositories\FirearmRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class FirearmService {
   
    protected $firearmRepository; 

    public function __construct(firearmRepository $firearmRepository)
    {
        $this->firearmRepository = $firearmRepository;
    }

    public function all()
    {
        return $this->firearmRepository->all();
    }

    public function insert($data)
    {
        return $this->firearmRepository->insert($data);
    }

    public function update($data, $id)
    {
        return $this->firearmRepository->update($data, $id);
    }

    public function getById($id)
    {
        return $this->firearmRepository->getById($id);
    }

    public function getByCaseId($case_id)
    {
        return $this->firearmRepository->getByCaseId($case_id);
    }

    public function getByCaseNo($case_no)
    {
        return $this->firearmRepository->getByCaseNo($case_no);
    }

    public function getByName($name, $case_no){
        return $this->firearmRepository->getByName($name, $case_no);
    }

    public function delete($id)
    {
        return $this->firearmRepository->delete($id);
    }
}