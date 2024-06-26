<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;
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
    return view('welcome');
});

Route::get('/nasabah/index', [CustomerController::class, 'index']);
Route::get('/nasabah/showaddress/{param}', [CustomerController::class, 'showaddress']);

// student

Route::get('/nasabah/GetStudent/{name}/{code}', [CustomerController::class, 'GetStudent']);

Route::get('/person/create',[PersonController::class, 'create'])->name('person.create');
Route::post('/person/store',[PersonController::class, 'store'])->name('person.store');