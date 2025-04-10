<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManageEmployeeController;
use App\Http\Controllers\PageController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/greet/{name?}', [EmployeeController::class, 'greet']);
Route::resource('/manageemployee', ManageEmployeeController::class);

Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/aboutus', [PageController::class, 'about'])->name('aboutus');
Route::get('/contactus', [PageController::class, 'contact'])->name('contactus');
Route::get('/control/{grade?}', [EmployeeController::class, 'control'])->name('control');
