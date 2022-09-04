<?php

namespace App\Services;
use App\Repositories\RequesterRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class RequesterService {
    protected $requesterRepository; 

    public function __construct(RequesterRepository $requesterRepository)
    {
        $this->requesterRepository = $requesterRepository;
    }

    public function all()
    {
        return $this->requesterRepository->all();
    }

    public function insert($file)
    {
        return $this->requesterRepository->insert($file);
    }

    public function update($file, $id)
    {

        return $this->requesterRepository->update($file, $id);

    }

    public function getById($id)
    {
        return $this->requesterRepository->getById($id);
    }

    public function delete($id)
    {
        return $this->requesterRepository->delete($id);
    }
}