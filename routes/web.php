<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ArchieveController;
use App\Http\Controllers\ImageController;

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


Auth::routes();

Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'register' ])->name('employee');
Route::post('/create', [App\Http\Controllers\EmployeeController::class, 'createEmployee'])->name('createEmployee');
Route::get('edit/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('show');
Route::post('updateEmployee/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update');
Route::get('delete/{id}', [App\Http\Controllers\ArchieveController::class, 'delete'])->name('delete');
// Route::controller(ImageController::class)->group(function(){
//     Route::get('image-upload', 'index');
//     Route::post('image-upload', 'store')->name('image.store');
// });

Route::get('/upload', [App\Http\Controllers\ImageController::class, 'create']);
Route::post('/upload', [App\Http\Controllers\ImageController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
