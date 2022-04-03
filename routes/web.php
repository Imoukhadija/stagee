<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TableauBordreController;
use App\Http\Controllers\AssuranceController;
use App\Http\Controllers\AssuranceAutoController;

use App\Http\Controllers\home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    return view('home.index');
 })->name("homeassurance");

 Route::get('/clientt',[ClientsController::class,'index1'])->name("indexclient");

    Route::get('/client',[ClientsController::class,'index']);
    Route::get('/client/create',[ClientsController::class,'indexcreate'])->name("indexcreate");
 Route::get('/TableauBordre',[TableauBordreController::class,'index'])->name("indextab");
//Route::get('/assurance/auto',[AssuranceController::class,'index']);
 //Route::get('/home/client',[ClientsController::class,'index']);
//Route::get('client/create', [ClientsController::class, 'create']);
Route::post('/client/store', [ClientsController::class,'store'])->name("clientstore");

//Route::get('/clientss/', [ClientsController::class,'indexedit'])->name("clientindex");
////Route::get('/client/edit/{clients}', [ClientsController::class,'edit'])->name("clientedit")

Route::get('/blog',[home::class,'index'])->name("home");