<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\ImageUploadController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\EvidenceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware(['auth:api'])->group(function () {
    Route::resource('incident', IncidentController::class);
    Route::get('incident/case/case-number/{caseNo}', [IncidentController::class, 'getByCaseNo']);
    Route::resource('evidence', EvidenceController::class);
    Route::get('incident/evidence/{caseId}', [EvidenceController::class, 'getEvidenceByCaseId']);
    Route::resource('file', FileController::class);
    Route::get('file/case/{caseId}', [FileController::class, 'getByCaseId']);
    Route::post('image-upload', [ImageUploadController::class, 'upload'])->middleware("cors");
    Route::get('images/{filename}', [ImageUploadController::class, 'display']);
});