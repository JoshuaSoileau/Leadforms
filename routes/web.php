<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
////
//Route::get('/about', function () {
//    $bestTeam = ['Josh', 'Michael', 'Brent', 'Rob', 'Luke', 'Marc'];
//    return view('about')->with('team', $bestTeam);
//});

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Auth::routes();

Route::resource('leadforms', 'LeadformController');

//Route::get('/home', 'HomeController@index')->name('home');
