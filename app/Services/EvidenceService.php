<?php

namespace App\Services;
use App\Repositories\EvidenceRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class EvidenceService {
    protected $evidenceRepository; 

    public function __construct(EvidenceRepository $evidenceRepository)
    {
        $this->evidenceRepository = $evidenceRepository;
    }

    public function all()
    {
        return $this->evidenceRepository->all();
    }

    public function insert($data)
    {
        return $this->evidenceRepository->insert($data);
    }

    public function update($data, $id)
    {

        return $this->evidenceRepository->update($data, $id);

    }

    public function getById($id)
    {
        return $this->evidenceRepository->getById($id);
    }

    public function getByCaseId($id)
    {
        return $this->evidenceRepository->getByCaseId($id);
    }

    public function delete($id)
    {
        return $this->evidenceRepository->delete($id);
    }
}