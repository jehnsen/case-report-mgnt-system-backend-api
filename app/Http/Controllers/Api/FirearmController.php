<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FirearmService;
use Illuminate\Http\Request;

class FirearmController extends Controller
{
    protected $firearmService;

    public function __construct(FirearmService $firearmService){
        $this->firearmService = $firearmService;
    }

    public function index()
    {
        $result = $this->firearmService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    {
        $data = $request->input();
        $newCaseNo = json_decode(json_encode($data))->case_no;
        $newFirearm = json_decode(json_encode($data))->firearm_name;
        $existingRecord = $this->firearmService->getByName($newCaseNo, $newFirearm);

        if($existingRecord){
            return response([ 'data' => $existingRecord, 'message' => 'Firearm Already Exist' ], 409);
        }

        $result = $this->firearmService->insert($data);

        return response([ 'data' => $result, 'message' => 'Created successfully' ], 201);
    }

    public function show($id)
    {
        
    }

    public function getByCaseNo($caseNo)
    {
        $result = $this->firearmService->getByCaseNo($caseNo);

        return response(['data' => $result], 200);
    }

    public function getByCaseId($caseId)
    {
        $result = $this->firearmService->getByCaseId($caseId);

        return response(['data' => $result], 200);
    }

    public function update(Request $request, $id)
    {
        $result = $this->firearmService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function destroy($id)
    {
        $result = $this->firearmService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
