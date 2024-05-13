<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
// Route::get('/', function () {
//     return view('welcome');


// });
Route::get('/',[CrudController::class,'showData']);
Route::get('/add-data',[CrudController::class,'addData']);
Route::POST('/store-data',[CrudController::class,'storeData']);

