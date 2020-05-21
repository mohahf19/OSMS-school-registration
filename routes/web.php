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
Route::get('/test', function () {return view('activity-calendar');});

//For Auth
Route::get('/login', 'LoginController@index')->name('login-index');
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/logout', 'LoginController@logout')->name('logout');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/courses', 'HomeController@courses')->name('courses')->middleware('auth');
Route::get('/course-sections/{course_id}', 'HomeController@courseSections')->name('course-sections')->middleware('auth');


Route::get('/meals', 'HomeController@meals');
Route::get('/activities', 'ActivitiesController@index');
Route::get('/exams', 'AssessmentsController@index');
Route::get('/dorms', 'HomeController@dorms');
Route::get('/payments', 'HomeController@payments');
Route::get('/home/current-courses', 'HomeController@CurrCourses');
Route::get('/home/gpacalc', 'HomeController@gpacalc');
Route::post('/home/gpacalc', 'HomeController@gpacalculate');