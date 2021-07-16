<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('',[LayoutController::class, 'masterLayout']);
Route::get('/form',[LayoutController::class, 'create']);
Route::get('/list',[LayoutController::class, 'list']);
