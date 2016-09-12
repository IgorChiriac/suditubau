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

Route::get('/', function () {
    $path = public_path() . "/gallery.json"; // ie: /var/www/laravel/app/storage/json/filename.json
    if (!File::exists($path)) {
        throw new Exception("Invalid File");
    }

    $file = json_decode(File::get($path));
    return view('layouts/master', ['data' => $file]);
});

Route::post('/', function (Request $request) {
    dd($request);
});
