<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\VictimService;
use Illuminate\Http\Request;

class VictimController extends Controller
{
    protected $victimService;

    public function __construct(VictimService $victimService){
        $this->victimService = $victimService;
    }
    
    public function index()
    {
        $result = $this->victimService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $file = $this->victimService->insert($data);

        return response([ 'data' => $file, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->victimService->update($request->input(), $id);

        if(!$result) {
            return response(['message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $result = $this->victimService->getById($id);
        // return $result->isEmpty();
        if ($result->isEmpty() > 0) {
            return response(['message' => 'No record found!', 'data' => $result], 404);
        }

        return response(['message' => 'Retrieved successfully', 'data' => $result], 200);
    }

    public function destroy($id)
    {
        $result = $this->victimService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }

    public function getByCaseId($caseId)
    {
        $result = $this->victimService->getByCaseId($caseId);
        // return $result->isEmpty();
        if ($result->isEmpty() > 0) {
            return response(['message' => 'No record found!', 'data' => $result], 404);
        }

        return response(['message' => 'Retrieved successfully', 'data' => $result], 200);
    }
}
