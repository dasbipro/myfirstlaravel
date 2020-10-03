<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ImageController;
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

// Route::get('about-us/{name}/{email}', function ($name, $email) {
//     return view('about-us', ['myname' => $name, 'email' => $email]);});
// Route::get('contact/{contact}', 'MyContact@contact');
// Route::get('team/{name}', 'MyController@team');
// Route::get('employee', 'EmployeesController@index');
// Route::get('add-info', 'EmployeesController@add');
// Route::post('insert-employee', 'EmployeesController@store');




// Authentication
// Route::get('login', 'AuthController@login');
// Route::post('loginstore', 'AuthController@store');

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

// Authentication
// Route::get('login', 'AuthController@login');
// Route::post('loginstore', 'AuthController@store');



//  Employee Panel

// Route::get('employee-add', 'EmployeeController@add');
// Route::post('store-employee', 'EmployeeController@store');
// Route::get('employees', 'EmployeeController@all');
// Route::get('edit-employee/{id}', 'EmployeeController@edit');
// Route::post('update-employee/{id}', 'EmployeeController@update');
// Route::get('delete-employee/{id}', 'EmployeeController@delete');


// Route::get('add-student', 'StudentController@create');

// Route::post('insert-student', 'StudentController@store');

Route::get('students','StudentController@all');

// Route::get('edit-student/{id}','StudentController@edit');
// Route::post('update-student/{id}','StudentController@update');



//Log In Page

Route::get('/login', 'UserAuthController@login')->middleware('can:isAdmin')->name('login');
// Route::get('/login', 'UserAuthController@login')->middleware('can:isAdmin')->name('items.delete');
// Route::get('/login', 'UserAuthController@login')->middleware('can:isAdmin')->name('items.delete');
Route::get('/login','UserAuthController@login');
Route::post('loginstore','UserAuthController@loginstore');

Route::group(['middleware' => 'checkloggedin'], function () {
        //Admin Panel
        Route::get('dashboard',function(){
            return view('admin.pages.dashboard');
        });
        Route::get('tables',function(){
            return view('admin.pages.tables');
        });
        Route::get('charts', function () {
            return view('admin.pages.charts');
        });
        Route::get('products','ProductController@index');
        //image upload
        Route::get('image-upload','ImageController@index');
        Route::post('upload','ImageController@upload');

        //  Employee Panel

        Route::get('employee-add', 'EmployeeController@add');
        Route::post('store-employee', 'EmployeeController@store');
        Route::get('employees', 'EmployeeController@all');
        Route::get('edit-employee/{id}', 'EmployeeController@edit');
        Route::post('update-employee/{id}', 'EmployeeController@update');
        Route::get('delete-employee/{id}', 'EmployeeController@delete');
        Route::get('multipleimageupload', 'MultipleImageController@index');
        Route::post("upload_image", "MultipleImageController@store");

});
