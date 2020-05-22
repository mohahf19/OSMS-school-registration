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
Route::post('/register-course', 'HomeController@registerSection');

Route::get('/profile', 'ProfileController@index')->middleware('auth');
Route::post('/profile-update', 'ProfileController@profileUpdate')->middleware('auth');

Route::get('add-attendance/{section_id}', 'AttendanceController@addAttendance')->middleware('auth');
Route::get('add-grades-index/{section_id}', 'GradesController@addGradesIndex')->middleware('auth');
Route::get('add-grades-course/{section_id}/{assessment_id}', 'GradesController@addGradesCourse')->middleware('auth');

Route::post('update-attendance', 'AttendanceController@addAttendanceSubmit')->middleware('auth');
Route::post('update-grades-submit', 'GradesController@addGradesSubmit')->middleware('auth');


Route::get('view-attendance/{course_id}', 'AttendanceController@show')->middleware('auth');
Route::get('view-grades/{course_id}', 'GradesController@show')->middleware('auth');
Route::get('/view-tutors', 'TutorListController@index')->name('home')->middleware('auth');

Route::get('/meals', 'HomeController@meals')->middleware('auth');
Route::get('/activities', 'ActivitiesController@index')->middleware('auth');
Route::get('/exams', 'AssessmentsController@index')->middleware('auth');
Route::get('/dorms', 'HomeController@dorms')->middleware('auth');
Route::get('/payments', 'HomeController@payments')->middleware('auth');
Route::get('/home/current-courses', 'HomeController@CurrCourses')->middleware('auth');
Route::get('/home/gpacalc', 'HomeController@gpacalc')->middleware('auth');
Route::post('/home/gpacalc', 'HomeController@gpacalculate')->middleware('auth');

Route::get('/home/transcript', 'HomeController@transcript')->middleware('auth');

Route::get('/search', 'SearchController@search')->middleware('auth');