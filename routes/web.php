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


Route::get('/', 'TruckController@index')->name('trucks.index');
Route::get('/trucks/create', [
     'uses' => 'TruckController@create',
     'as' => 'truck.create'
]);
Route::post('/trucks', [
     'uses' => 'TruckController@store',
     'as' => 'truck.store'
]);
