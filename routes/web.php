<?php

use App\Models\load;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Navbar');
});



Route::post('/insprocess',[UserController::class,'insertData']);

Route::get('/load',[UserController::class,'getData']);

Route::get('/editData', [UserController::class,'editData']);

Route::post('/update',[UserController::class,'UpdataData']);

Route::post('/delete',[UserController::class,'deleteData']);