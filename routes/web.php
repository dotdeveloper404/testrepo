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




Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::redirect('/', '/login');

Auth::routes();

// Route::post('/employee/contact//', 'EmployeeController@save_emergency_contact')->name('save_emergency_contact');

// Route::get('/employee/contact/{id}', 'EmployeeController@contact')->name('contact');

Route::get('home',"HomeController@index")->name('home');
Route::get('dashboard',"HomeController@index")->name('dashboard');

Route::resource('employee.emergency-contact', 'EmployeeEmergencyContactController');


Route::get('/hr/jotform',"HrController@jotform")->name('/hr/jotform');

Route::resource('/hr', 'HrController', [
	'names' => [
		'index' => 'hr.index',
		'create' => 'hr.create',
        'update' => 'hr.update',
        'edit' => 'hr.edit',
        'store' => 'hr.store',
 	],
	'parameters' => [
 		'hr' => 'hr'
	]
]);



Route::resource('/employee', 'EmployeeController', [
	'names' => [
		'index' => 'employee.index',
		'create' => 'employee.create',
        'update' => 'employee.update',
        'edit' => 'employee.edit',
        'store' => 'employee.store',
 	],
	'parameters' => [
 		'employee' => 'employee'
	]
]);

Route::get('/form/form_data','FormController@form_data')->name('form.form_data');
Route::get('/form/getFormData/{form}','FormController@get_form_data')->name('form.get_form_data');
Route::post('/form/save_form_data/{form}','FormController@save_form_data')->name('form.save_form_data');
Route::post('/form/update_form_data/{form}','FormController@update_form_data')->name('form.update_form_data');

Route::resource('form', 'FormController');

// Route::get('/employee/index', 'EmployeeController@index')->name('index');

