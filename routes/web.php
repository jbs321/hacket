<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'login'])->name( 'login');
Route::get('/login', [HomeController::class, 'login'])->name( 'login');
Route::post('/login', [HomeController::class, 'tryLogin']);
Route::get('/xss', [HomeController::class, 'xss'])->name('xss');
Route::post('/xss', [HomeController::class, 'tryXss']);
Route::post('/xss/{id}', [HomeController::class, 'deletePost']);
