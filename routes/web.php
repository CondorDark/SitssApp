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

// Ventana inicial
Route::get('/', function () {

    return view('auth.login');
});

// Se elimina para los usuario no resgistrados las siguientes opciones
Auth::routes();

// No tocar configuracion
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::resource('/routes'  , 'RoutesController'   )->middleware('auth')
                                                    ->except(['store', 'show', 'edit', 'update', 'destroy']);

Route::resource('/stations', 'StationsController' )->middleware('auth')
                                                    ->except(['show', 'edit', 'update']);

Route::resource('/travels' , 'TravelsController'  )->middleware('auth')
                                                    ->except(['show', 'edit', 'update']);

Route::resource('/safra'   , 'SafraController'    )->middleware('auth')
                                                    ->except(['show', 'edit', 'destroy']);

Route::resource('/haul'    , 'HaulController'     )->middleware('auth')
                                                    ->except(['show', 'edit', 'update']);

Route::resource('/report'  , 'ReportsController' )->middleware('auth');

Route::resource('/clothingSize', 'ClothingSizeController')->middleware('auth');

Route::name('imprimir')->post('/report/document', 'ReportsController@generar' )->middleware('auth');
