<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\IncidentService;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    protected $incidentService;
    // protected $customerResource;

    public function __construct(IncidentService $incidentService){
        $this->incidentService = $incidentService;
        // $this->customerResource = $customerResource; CustomerResource $customerResource
    }
    
    public function index()
    {
        $result = $this->incidentService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    {
       
        $data = $request->input();

        $incident = $this->incidentService->insert($data);

        // return $customer;

        return response([ 'data' => $incident, 'message' => 'Created successfully' ], 201);
       
    }

    public function update(Request $request, $id)
    {
        $result = $this->incidentService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }
}
