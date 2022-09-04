<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PersonService;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    protected $personService;

    public function __construct(PersonService $personService){
        $this->personService = $personService;
    }
    
    public function index()
    {
        $result = $this->personService->all();
        return response([ 'data' => $result, 'message' => 'Retrieved successfully' ]);
    }

    public function store(Request $request)
    { 
        $data = $request->input();

        $file = $this->personService->insert($data);

        return response([ 'data' => $file, 'message' => 'Created successfully' ], 201);
    }

    public function update(Request $request, $id)
    {
        $result = $this->personService->update($request->input(), $id);

        if(!$result){
            return response([ 'message' => 'No record found!'], 404);
        }

        return response([ 'data' => $result, 'message' => 'Updated successfully'], 200);
    }

    public function show($id)
    {
        $result = $this->personService->getById($id);

        return response(['data' => $result], 200);
    }

    public function destroy($id)
    {
        $result = $this->personService->delete($id);

        if(!$result){
            return response([ 'message' => 'Record does not exist!'], 404);
        }
        return response([ 'data' => $result, 'message' => 'Deleted successfully'], 200);
    }
}
