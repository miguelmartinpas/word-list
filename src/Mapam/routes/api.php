<?php

use Illuminate\Http\Request;

Use Mapam\Middlewares\Token as TokenMiddleware;

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

Route::get('/wordList', 'WordList@get')->middleware(TokenMiddleware::class);
