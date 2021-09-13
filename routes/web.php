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

//Route::get('/', 'HomeController@index')->name('index');

//Route::get('/admin', 'AdminController@index')->name('admin');

//Route::get('/','CarController@index');    ->middleware('auth')
Route::get('/home','AgenceController@index');
Route::get('/show','AgenceController@showAgence')->name('agence.show');
//Route::get('/agence','AgenceController@show')->name('agence.show');
//**Clent
Route::get('/register','ClientController@create')->name('clients.register');
Route::post('/register','ClientController@register')->name('clients.register');
Route::get('/clients/{id}/profile','ClientController@show')->name('clients.profile');
Route::get('/clients','ClientController@showAllclients')->name('clients.allClient');
//**Cars
Route::resource('/cars','CarController');
Route::get('/reserver','CarController@reserver')->name('reserver.index');
Route::get('/cars','CarController@index')->name('cars.index');
Route::post('/add/car','CarController@store')->name('cars.store');
Route::get('/add/car','CarController@create')->name('cars.create');
//**command
Route::resource('/commands','CommandController');
Route::get('/commands/{id}/create','CommandController@create')->name('command.create');
Route::delete('/commands/{commandId}/{carId}/delete','CommandController@deleteUserCommands')->name('command.delete');
//**visite
Route::get('/visites','VisiteTchechniqueController@index')->name('visiteTechnique.index');
Route::get('/add/visite','VisiteTchechniqueController@create')->name('visiteTechnique.create');
Route::post('/add/visite','VisiteTchechniqueController@store')->name('visiteTechnique.store');
Route::get('/visite/{id}','VisiteTchechniqueController@edit')->name('visiteTechnique.edit');
Route::put('/visite/update', 'VisiteTchechniqueController@update')->name('visiteTechnique.update');
Route::delete('/{id}/delete','VisiteTchechniqueController@destroy')->name('visiteTechnique.destroy');
//** assurance
Route::get('/assurance','AssuranceController@index')->name('assurance.index');
Route::get('/add/assurance','AssuranceController@create')->name('assurance.create');
Route::post('/add/assurance','AssuranceController@store')->name('assurance.store');
Route::get('/assurance/{id}','AssuranceController@edit')->name('assurance.edit');
Route::put('/assurance/update', 'AssuranceController@update')->name('assurance.update');
Route::delete('/{id}/delete','AssuranceController@destroy')->name('assurance.destroy');


Auth::routes();
Route::get('/', 'HomeController@index')->name('index');



//login
/*
Route::get('/login','UsersController@login')->name('users.login');
Route::post('/auth','UsersController@auth')->name('users.auth');
Route::post('/logout','UsersController@logout')->name('users.logout');
*/
//**user
/*
Route::get('/register','UsersController@create')->name('users.register');
Route::post('/register','UsersController@register')->name('users.register');
Route::get('/user/{id}/profile','UsersController@show')->name('users.profile');
Route::get('/users','UsersController@showAllUsers')->name('users.alluser');
*/
//Route::get('/','UsersController@ContUsers')->name('users.alluser');
//Route::get('/admin','AdminsController@index')->name('admins.index');


//login
/*
Route::get('/login','UsersController@login')->name('users.login');
Route::post('/auth','UsersController@auth')->name('users.auth');
Route::post('/logout','UsersController@logout')->name('users.logout');
*/
