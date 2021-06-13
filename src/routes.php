<?php

use Controllers\{HomeController, SocksController,TiesController};
use Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/socks', [SocksController::class, 'index']);
Route::get('/socks/{id}', [SocksController::class, 'showSocks']);
Route::get('/socks/create', [SocksController::class, 'create']);
Route::post('/socks/create', [SocksController::class, 'persistInsert']);
Route::get('/socks/update/{id}', [SocksController::class, 'update']);
Route::post('/socks/update/{id}', [SocksController::class, 'persistUpdate']);
Route::post('/socks/delete/{id}', [SocksController::class, 'delete']);
// TIES

Route::get('/ties', [TiesController::class, 'index']);
Route::get('/ties/{id}', [TiesController::class, 'show']);
Route::get('/ties/create', [TiesController::class, 'create']);
Route::post('/ties/create', [TiesController::class, 'persistInsert']);
Route::get('/ties/update/{id}', [TiesController::class, 'update']);
Route::post('/ties/update/{id}', [TiesController::class, 'persistUpdate']);
Route::post('/ties/delete/{id}', [TiesController::class, 'delete']);

//Route::get('/user/ties', [TiesController::class, 'index']);
//Route::get('/user/ties/{id}', [TiesController::class, 'show']);
