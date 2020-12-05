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

Route::get('/quizz', [App\Http\Controllers\HomeController::class, 'index'])->name('quizz');
Route::get('/create_quizz', [App\Http\Controllers\HomeController::class, 'create_quizz'])->name('create_quizz');
Route::post('/save_quizz', [App\Http\Controllers\HomeController::class, 'save_quizz'])->name('save_quizz');

