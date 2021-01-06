<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/client/login', 'ClientLoginController@showLoginForm')->name('teacher.login');
// Route::post('/client/login', 'ClientLoginController@login')->name('client.postlogin');
// Route::post('/client/logout', 'ClientLoginController@logout')->name('client.logout');

// Route::group(['middleware' => 'client'], function () {
//     Route::get('/client/home', 'Client\HomeController@index');
// });
//Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('/', 'Auth@login')->name('login');
Route::post('/postlogin', 'Auth@postlogin');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/ubahpassword', 'AuthController@ubahpass');
    Route::patch('/changepass', 'AuthController@updatePassword');
    Route::get('/logout', 'AuthController@logout');
});
