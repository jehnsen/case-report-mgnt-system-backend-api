<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RequesterService;
use Illuminate\Http\Request;

class RequesterController extends Controller
{
    protected $requesterService;

    public function __construct(RequesterService $requesterService){
        $this->requesterService = $requesterService;
    }
    
    public function index()
    {
        $result = $this->requesterService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $result = $this->requesterService->insert($data);

        return response([ 'data' => $result, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->requesterService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $result = $this->requesterService->getById($id);

        return response(['data' => $result], 200);
    }

    public function destroy($id)
    {
        $result = $this->requesterService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
