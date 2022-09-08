<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\ImageUploadController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\EvidenceController;
use App\Http\Controllers\Api\RequesterController;
use App\Http\Controllers\Api\PersonController;
use App\http\Controllers\Api\DispositionController;
use App\http\Controllers\Api\CategoryController;
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

Route::post('register', [AuthController::class, 'register'])->middleware("cors");
Route::post('login', [AuthController::class, 'login'])->middleware("cors");
Route::put('user/update', [AuthController::class, 'update'])->middleware("cors");
Route::get('user', [AuthController::class, 'get'])->middleware("cors");
Route::delete('user/{id}', [AuthController::class, 'delete'])->middleware("cors");
Route::group(['middleware' => ['auth:api','cors']], function () {
    Route::resource('incident', IncidentController::class);
    Route::get('incident/case/case-number/{caseNo}', [IncidentController::class, 'getByCaseNo']);
    Route::resource('evidence', EvidenceController::class);
    Route::get('incident/evidence/{caseId}', [EvidenceController::class, 'getEvidenceByCaseId']);
    Route::resource('file', FileController::class);
    Route::get('file/case/{caseId}', [FileController::class, 'getByCaseId']);
    Route::put('file/case/{caseId}', [FileController::class, 'updateByCaseId']);
    Route::post('image-upload', [ImageUploadController::class, 'upload']);
    Route::get('images/{filename}', [ImageUploadController::class, 'display']);
    Route::resource('requester', RequesterController::class);
    Route::resource('person', PersonController::class);
    Route::resource('disposition', DispositionController::class);
    Route::resource('category', CategoryController::class);
});