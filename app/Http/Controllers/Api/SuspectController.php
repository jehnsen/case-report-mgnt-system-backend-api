<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SuspectService;
use Illuminate\Http\Request;

class SuspectController extends Controller
{
    protected $suspectService;

    public function __construct(SuspectService $suspectService){
        $this->suspectService = $suspectService;
    }
    
    public function index()
    {
        $result = $this->suspectService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $file = $this->suspectService->insert($data);

        return response([ 'data' => $file, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->suspectService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $result = $this->suspectService->getById($id);

        return response(['data' => $result], 200);
    }

    public function destroy($id)
    {
        $result = $this->suspectService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }

    public function getByCaseId($caseId)
    {
        $result = $this->suspectService->getByCaseId($caseId);
        // return $result->isEmpty();
        if ($result->isEmpty() > 0) {
            return response(['message' => 'No record found!', 'data' => $result], 404);
        }

        return response(['message' => 'Retrieved successfully', 'data' => $result], 200);
    }
}
