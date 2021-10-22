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


Route::get('/login', 'App\Http\Controllers\auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\auth\LoginController@login');

Route::group(['middleware' => 'auth', 'as' => 'employee.'], function () {
    Route::get('/', [\App\Http\Controllers\Employee\EmployeeController::class, 'index']);
    Route::resource('availability', \App\Http\Controllers\Employee\AvailabilityController::class);
});

Route::group(['prefix' => 'employer', 'as' => 'employer.', 'middleware' => 'auth', 'admin'], function () {
    Route::get('/', function () {
        return view('pages.employer.home');
    });

    Route::resource('employees', \App\Http\Controllers\Employer\EmployeeController::class);
//    Route::resource('groups', \App\Http\Controllers\Employer\GroupsController::class);

});


?>

