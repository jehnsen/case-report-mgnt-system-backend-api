<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FirearmInventoryService;
use Illuminate\Http\Request;

class FirearmInventoryController extends Controller
{
    protected $firearmInventoryService;

    public function __construct(FirearmInventoryService $firearmInventoryService){
        $this->firearmInventoryService = $firearmInventoryService;
    }

    public function index()
    {
        $result = $this->firearmInventoryService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    {
        $data = $request->input();

        $newCaseNo = json_decode(json_encode($data))->case_no;
        $existingRecord = $this->firearmInventoryService->getByCaseNo($newCaseNo);

        if($existingRecord){
            return response([ 'data' => $existingRecord, 'message' => 'Record Already Exist' ], 409);
        }

        $result = $this->firearmInventoryService->insert($data);

        return response([ 'data' => $result, 'message' => 'Created successfully' ], 201);
    }

    public function show($id)
    {
        $result = $this->firearmInventoryService->getById($id);

        return response(['data' => $result], 200);
    }

    public function update(Request $request, $id)
    {
        $result = $this->firearmInventoryService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function destroy($id)
    {
        $result = $this->firearmInventoryService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
