<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MyContact;
use App\Http\Controllers\StudentController;
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

// website panel

Route::get('/', function () {
    return view('website.pages.welcome');
});
Route::get('/about-us', function () {
    return view('website.pages.about-us');
});
Route::get('/services', function () {
    return view('website.pages.services');
});
Route::get('/contact', function () {
    return view('website.pages.contact');
});


// Route::get('about-us/{name}/{email}', function ($name, $email) {
//     return view('about-us', ['myname' => $name, 'email' => $email]);});
// Route::get('contact/{contact}', 'MyContact@contact');
// Route::get('team/{name}', 'MyController@team');






Route::get('employee', 'EmployeesController@index');

Route::get('add-info', 'EmployeesController@add');

Route::post('insert-employee', 'EmployeesController@store');







Route::get('add-student', 'StudentController@create');

Route::post('insert-student', 'StudentController@store');

Route::get('students','StudentController@index');
Route::get('edit-student/{id}','StudentController@edit');
Route::post('update-student/{id}','StudentController@update');






//Admin Panel
Route::get('/dashboard',function(){
    return view('admin.pages.dashboard');
});

Route::get('/tables',function(){
    return view('admin.pages.tables');
});

Route::get('/charts', function () {
    return view('admin.pages.charts');
});

//Log In Page

Route::get('login','UserAuthController@login');
Route::post('loginstore','UserAuthController@loginstore');
