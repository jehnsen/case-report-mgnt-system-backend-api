<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ImageUploadController extends Controller
{
    public function upload(Request $request, Response $response){
        if(!$request->hasFile('image')){
            return response()->json('{"Server Response": "Please provide an image."}');
        }
   
        $originalName = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($originalName, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();

        $parsedName = str_replace(' ', '_', $filename).'.'.$extension;
        
        $path = $request->file('image')->storeAs('public/photos', $parsedName);

        return $response->status(); 
    }

    public function display($filename){
      
        $path = storage_public('images/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    }
}
