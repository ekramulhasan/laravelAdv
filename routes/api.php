<?php

use App\Http\Controllers\APIcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('first-api',[APIcontroller::class,'firstAIP']);
Route::get('student-api',[APIcontroller::class,'student_api']);
Route::get('/perm/{id?}',[APIcontroller::class,'student_api_withPeremiter']);

Route::post('/savedata',[APIcontroller::class,'storeStudent']);
Route::put('/update-data',[APIcontroller::class,'updateStudent']);
Route::delete('/delete-data/{id}',[APIcontroller::class,'deleteStudent']);
