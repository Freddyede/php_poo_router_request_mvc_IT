<?php

use Controllers\{HomeController, SocksController,TiesController};
use Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/socks', [SocksController::class, 'index']);
Route::get('/socks/{id}', [SocksController::class, 'showSocks']);
Route::get('/socksCreate', [SocksController::class, 'create']);
Route::post('/socksCreateInsert', [SocksController::class, 'persistInsert']);
Route::get('/socksUpdate/{id}', [SocksController::class, 'update']);
Route::post('/socksUpdateInsert/{id}', [SocksController::class, 'persistUpdate']);
Route::post('/socksDelete/{id}', [SocksController::class, 'delete']);
// TIES

Route::get('/ties', [TiesController::class, 'index']);
Route::get('/ties/{id}', [TiesController::class, 'show']);
Route::get('/tiesCreate', [TiesController::class, 'create']);
Route::post('/tiesCreateInsert', [TiesController::class, 'persistInsert']);
Route::get('/tiesUpdate/{id}', [TiesController::class, 'update']);
Route::post('/tiesUpdateInsert/{id}', [TiesController::class, 'persistUpdate']);
Route::post('/tiesDelete/{id}', [TiesController::class, 'delete']);
Route::get('/tiesSocks', [TiesController::class, 'joinController']);

//Route::get('/user/ties', [TiesController::class, 'index']);
//Route::get('/user/ties/{id}', [TiesController::class, 'show']);
