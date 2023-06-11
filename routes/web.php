<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello/dolly", function () {
    return view('meong.hello')->with("name", "Dolly Dolly");
});


Route::get("/hello/{name?}", function (string $name = null) {
    return view('meong.hello', ["name" => $name, "data" => [
        "name" => $name,
        "meong" => 100
    ]]);
});

Route::get("/hello-hello/{name?}", function (string $name = null) {
    return view('meong.hello', data: ["name" => $name, "data" => [
        "name" => $name,
        "meong" => 100
    ]])->with("meong", "MEW")
        ->with("creator", "Hayoloh");
});
