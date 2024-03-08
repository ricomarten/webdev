<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;

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

#Route::get('/', function () {
    #return view('welcome');
    #return view('hallo');
    
#});
Route::get('/', [HomeController::class,'index']);
Route::get('/home', function () {
    $name=["Andi","Budi","Caca"];
    $alamat=["Jakarta","Bogor","Tangerang"];
    return view('home',['data'=>$name, 'alamat'=>$alamat]);
});
Route::get('/about', [AboutController::class,'index']);
Route::get('/penjualan', [PenjualanController::class,'index']);