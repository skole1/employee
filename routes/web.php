<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'index'])->name('index');
Route::get('/staff/{id}', [SchoolController::class, 'getLgas']);

Route::get('/list-employee', [EmployeeController::class, 'listEmployee'])->name(
    'list'
);

Route::post('/postEmployee', [EmployeeController::class, 'postEmployee'])->name(
    'employee.add'
);
