<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/register', [App\Http\Controllers\registerController::class, 'index'])->middleware('guest');
Route::post('/register', [App\Http\Controllers\registerController::class, 'store']);


Route::get('/',[App\Http\Controllers\WebsiteController::class,'index']);

Route::group(['middleware' => ['auth']], function () {

Route::get('/admin/dashboard',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('/admin/about_me',[App\Http\Controllers\AboutMeController::class,'index']);
Route::post('/admin/about_me/create',[App\Http\Controllers\AboutMeController::class,'create']);



});
