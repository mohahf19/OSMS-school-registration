<?php

use App\Http\Controllers\LoginController;
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

//For bilal's testing
Route::get('/test', function () {return view('scheduled-exams');});

//For Auth
Route::get('/login', 'LoginController@index')->name('login-index');
Route::post('/login', 'LoginController@login')->name('login');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->middleware('auth');
