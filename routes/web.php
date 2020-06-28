<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MyContact;
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




Route::get('about-us/{name}/{email}', function ($name, $email) {
    return view('about-us', ['myname' => $name, 'email' => $email]);
});
Route::get('contact/{contact}', 'MyContact@contact');

Route::get('team/{name}', 'MyController@team');







Route::get('employee', 'EmployeesController@index');

Route::get('add-info', 'EmployeesController@add');

Route::post('insert-employee', 'EmployeesController@store');
