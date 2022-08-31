<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FileService;
use Illuminate\Http\Request;

class FileController extends Controller
{
    protected $fileService;

    public function __construct(FileService $fileService){
        $this->fileService = $fileService;
    }
    
    public function index()
    {
        $result = $this->fileService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $file = $this->fileService->insert($data);

        return response([ 'data' => $file, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->fileService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $file = $this->fileService->getById($id);

        return response(['data' => $file], 200);
    }

    public function getByCaseId($id)
    {
        $file = $this->fileService->getByCaseId($id);

        return response(['data' => $file], 200);
    }

    public function destroy($id)
    {
        $result = $this->fileService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
