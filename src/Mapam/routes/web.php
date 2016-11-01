<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/hola', function () {
  return response('Hello World!', 200)->header('Content-Type', 'text/plain');
});

Route::get('/hola.html', function () {
  $data = ['title' => 'Hello world html!'];
  return view('isolateView::hello', $data);
});

Route::get('/hola.json', function () {
  return response()->json([
    'message' => 'Hola mundo json!',
    'code' => 'CA'
  ]);
});
