<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;

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

//Route::resource('app', 'AppController');
//Rutas del registro de usuraio

//Route::get('register','AuthController@register')->name('auth.register');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/do-register', [AuthController::class, 'doRegister'])->name('auth.do-register');
Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'doLogin'])->name('auth.do-login');

Route::any('logout', [AuthController::class,'logout'])->name('auth.logout');



