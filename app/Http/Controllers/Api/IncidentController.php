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

    public function show($id)
    {
        $incident = $this->incidentService->getById($id);

        return response(['data' => $incident], 200);
    }

    public function destroy($id)
    {
        $result = $this->incidentService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }

    public function getByCaseNo($caseId)
    {
        $incident = $this->incidentService->getByCaseNo($caseId);

        return response(['data' => $incident], 200);
    }

}
