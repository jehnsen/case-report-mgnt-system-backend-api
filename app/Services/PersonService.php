<?php

namespace App\Services;
use App\Repositories\PersonRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class PersonService {
    protected $personRepository; 

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function all()
    {
        return $this->personRepository->all();
    }

    public function insert($file)
    {
        return $this->personRepository->insert($file);
    }

    public function update($file, $id)
    {

        return $this->personRepository->update($file, $id);

    }

    public function getById($id)
    {
        return $this->personRepository->getById($id);
    }

    public function delete($id)
    {
        return $this->personRepository->delete($id);
    }
}