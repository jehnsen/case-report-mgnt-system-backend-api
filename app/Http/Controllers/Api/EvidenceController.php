<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EvidenceService;
use Illuminate\Http\Request;

class EvidenceController extends Controller
{
    protected $evidenceService;

    public function __construct(EvidenceService $evidenceService){
        $this->evidenceService = $evidenceService;
    }
    
    public function index()
    {
        $result = $this->evidenceService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $file = $this->evidenceService->insert($data);

        return response([ 'data' => $file, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->evidenceService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $file = $this->evidenceService->getById($id);

        return response(['data' => $file], 200);
    }

    public function getEvidenceByCaseId($id)
    {
        $file = $this->evidenceService->getByCaseId($id);

        return response(['data' => $file], 200);
    }

    public function destroy($id)
    {
        $result = $this->evidenceService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
