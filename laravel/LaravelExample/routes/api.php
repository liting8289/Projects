<?php

use App\Http\Controllers\tdlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/lists', [tdlistController::class, 'getAllList']);

//4.新增成員
Route::post('/Insertlist', [tdlistController::class, 'Insertlist']);

Route::post('/Updatelist', [tdlistController::class, 'Updatelist']);

Route::post('/Deletelist', [tdlistController::class, 'Deletelist']);


Route::post('/Done', [tdlistController::class, 'Done']);
Route::post('/Undone', [tdlistController::class, 'Undone']);
Route::post('/fin', [tdlistController::class, 'fin']);
