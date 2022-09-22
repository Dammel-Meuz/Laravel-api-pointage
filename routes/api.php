<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//pointeur

Route :: get ( '/pointeur' , 'App\Http\Controllers\PointeurController@index' );
Route :: get ( '/pointeur/{id}' , 'App\Http\Controllers\PointeurController@show' );
Route :: post ( '/pointeur' , 'App\Http\Controllers\PointeurController@store' );
Route :: delete('/pointeur/delete/{id}', 'App\Http\Controllers\PointeurController@destroy');
Route :: put('/pointeur/edit/{id}', 'App\Http\Controllers\PointeurController@update');

//pointage
Route :: get ( '/pointage' , 'App\Http\Controllers\PointageController@index' );
Route :: post ( '/pointage' , 'App\Http\Controllers\PointageController@store' );
Route :: get ( '/pointage/{id}' , 'App\Http\Controllers\PointageController@show' );
Route :: put('/pointage/edit/{id}', 'App\Http\Controllers\PointageController@update');
Route :: delete('/pointage/delete/{id}', 'App\Http\Controllers\PointageController@destroy');
//tester si le pointeur a point aujourd'hui
Route :: get ( '/pointage/test/{date}/{phone}' , 'App\Http\Controllers\PointageController@testPointage' );

//Route :: get ( '/pointage/alluserpointage' , 'App\Http\Controllers\PointageController@getAllPointageUser' );