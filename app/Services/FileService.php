<?php

namespace App\Services;
use App\Repositories\FileRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class FileService {
    protected $fileRepository; 

    public function __construct(FileRepository $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    public function all()
    {
        return $this->fileRepository->all();
    }

    public function insert($file)
    {
        return $this->fileRepository->insert($file);
    }

    public function update($file, $id)
    {

        return $this->fileRepository->update($file, $id);

    }

    public function getById($id)
    {
        return $this->fileRepository->getById($id);
    }

    public function getByCaseId($id)
    {
        return $this->fileRepository->getByCaseId($id);
    }
    
    public function updateByCaseId($caseId)
    {
        return $this->fileRepository->updateByCaseId($caseId);
    }

    public function delete($id)
    {
        return $this->fileRepository->delete($id);
    }
}