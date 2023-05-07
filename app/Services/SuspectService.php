<?php

namespace App\Services;
use App\Repositories\SuspectRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class SuspectService {

    protected $suspectRepository; 

    public function __construct(SuspectRepository $suspectRepository)
    {
        $this->suspectRepository = $suspectRepository;
    }

    public function all()
    {
        return $this->suspectRepository->all();
    }

    public function insert($data)
    {
        return $this->suspectRepository->insert($data);
    }

    public function update($data, $id)
    {

        return $this->suspectRepository->update($data, $id);

    }

    public function getById($id)
    {
        return $this->suspectRepository->getById($id);
    }

    public function getByCaseId($caseId)
    {
        return $this->suspectRepository->getByCaseId($caseId);
    }

    public function delete($id)
    {
        return $this->suspectRepository->delete($id);
    }
}