<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller as auth;
use App\Http\Controllers\Homecontroller as home;

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

Route::get('/login', [auth::class, 'login']);
Route::get('/register', [auth::class, 'register']);

Route::post('/simpanuser', [auth::class, 'simpanuser']);
Route::post('/ceklogin', [auth::class, 'ceklogin']);

Route::get('/home', [home::class, 'home']);

Route::post('/logout', [auth::class, 'logout']);