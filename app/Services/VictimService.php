<?php

namespace App\Services;
use App\Repositories\VictimRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class VictimService {

    protected $victimRepository; 

    public function __construct(VictimRepository $victimRepository)
    {
        $this->victimRepository = $victimRepository;
    }

    public function all()
    {
        return $this->victimRepository->all();
    }

    public function insert($data)
    {
        return $this->victimRepository->insert($data);
    }

    public function update($data, $id)
    {

        return $this->victimRepository->update($data, $id);

    }

    public function getById($id)
    {
        return $this->victimRepository->getById($id);
    }

    public function getByCaseId($caseId)
    {
        return $this->victimRepository->getByCaseId($caseId);
    }

    public function delete($id)
    {
        return $this->victimRepository->delete($id);
    }
}