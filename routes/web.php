<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;

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

Route::middleware('auth')->group(function(){

    //Companies
    Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');
    Route::get('/companies/create', [CompaniesController::class, 'create']);
    Route::post('/companies', [CompaniesController::class, 'store']);
    Route::get('/companies/edit/{id}', [CompaniesController::class, 'edit']);
    Route::put('/companies/{id}', [CompaniesController::class, 'update']);
    Route::delete('companies/{id}', [CompaniesController::class, 'destroy']);
    Route::get('/companies/{id}', [CompaniesController::class, 'show']);


    //Employees
    Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');

});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');