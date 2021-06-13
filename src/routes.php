<?php

use Controllers\{HomeController, SocksController};
use Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/socks', [SocksController::class, 'index']);
Route::get('/socks/{id}', [SocksController::class, 'show']);
Route::get('/socks/create', [SocksController::class, 'create']);
Route::post('/socks/create', [SocksController::class, 'persistInsert']);
Route::get('/socks/update/{id}', [SocksController::class, 'update']);
Route::post('/socks/update/{id}', [SocksController::class, 'persistUpdate']);
Route::post('/socks/delete/{id}', [SocksController::class, 'delete']);

//Route::get('/user/ties', [TiesController::class, 'index']);
//Route::get('/user/ties/{id}', [TiesController::class, 'show']);
