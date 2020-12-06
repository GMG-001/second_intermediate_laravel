<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/students', [App\Http\Controllers\HomeController::class, 'students'])->name('students');
Route::get('/students/{id}', [App\Http\Controllers\HomeController::class, 'student'])->name('student');
Route::get('/classes', [App\Http\Controllers\HomeController::class, 'classes'])->name('classes');
Route::get('/classes/{id}', [App\Http\Controllers\HomeController::class, 'class'])->name('class');
Route::get('/my_classes', [App\Http\Controllers\HomeController::class, 'my_classes'])->name('my_classes');
Route::post('/students/{id}/change/', [App\Http\Controllers\HomeController::class, 'change_class'])->name('change_class');

Route::get('/create_class', [App\Http\Controllers\HomeController::class, 'create_class'])->name('create_class');
Route::post('create_class/save', [App\Http\Controllers\HomeController::class, 'save'])->name('create_class.save');

