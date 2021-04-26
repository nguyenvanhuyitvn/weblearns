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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin','namespace'=>'Admin\Auth'], function() {
    Route::get('login','AuthController@login')->name('login');
    Route::post('login','AuthController@submitLogin');
    Route::get('register','AuthController@register')->name('register');
    Route::post('register','AuthController@submitRegister');
});



Route::group(['prefix' => 'admin','namespace'=>'Admin'], function() {
    Route::get('/dashboard','AdminController@index')->name('dashboard');
});
