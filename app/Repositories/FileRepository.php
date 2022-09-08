<?php

namespace App\Repositories;

use App\Models\File;

class FileRepository
{
    protected $file;

    public function __construct(File $file){
        $this->file = $file;
    }

    public function all()
    {
        return $file = $this->file->all(); 
    }

    public function insert($data)
    {
        return $this->file->create($data);
    }

    public function update($data, $id)
    {
        return File::where('id', $id)->update($data);
    }

    public function getById($id){
        return File::where('files.id', $id)->get();
    }

    public function getByCaseId($id){
        return File::where('files.case_id', $id)->get();
    }

    public function updateByCaseId($caseId){
        return File::where('files.case_id', 0)->update(['case_id' => $caseId]);
    }

    public function delete($id)
    {
        $retrievedFile = $this->file->find($id);
        if(!$retrievedFile){
            return $retrievedFile;
        }
        return $retrievedFile->delete();
    }

}