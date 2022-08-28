<?php

namespace App\Services;
use App\Repositories\IncidentRepository;
// use App\Helpers\ValidationFields;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class IncidentService {
    protected $incidentRepository; 
    // protected $validationFields;

    public function __construct(IncidentRepository $incidentRepository)
    {
        $this->incidentRepository = $incidentRepository;
        // $this->validationFields = $validationFields;
    }

    public function all()
    {
        return $this->incidentRepository->all();
    }

    public function insert($data)
    {
        
        // $validator = Validator::make($data, $this->validationFields->getCustomerFields());

        // if($validator->fails()){
        //     return response(['error' => $validator->errors(), 'Validation Error'])->setStatusCode(400);
        // }

        return $this->incidentRepository->insert($data);
    }

    public function update($data, $id)
    {
        // $validator = Validator::make($data, $this->validationFields->getCustomerFields());

        // if ($validator->fails()) {
        //     return response(['error' => $validator->errors(), 'Validation Error'])->setStatusCode(400);
        // }

        return $this->incidentRepository->update($data, $id);

    }
}