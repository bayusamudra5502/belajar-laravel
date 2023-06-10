<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/hello/{id?}", function (Request $req, string $id = "unknown") {
    $name = $req->query("name", "Someone");
    return [
        "message" => "Hello $name with id $id",
    ];
})->whereNumber("id")->name("search");

Route::get("/search/{search}", function (string $search) {
    return [
        "search" => $search,
    ];
});

Route::get("/auto-hello", function () {
    return redirect()->route("search", [
        "id" => 123,
        "name" => "Fulan"
    ]);
});

Route::get("/test/{id}/blah/{code}", function (int $a, int $b) {
    return [
        "a" => $a,
        "b" => $b,
    ];
});

Route::post("/ping", function (Request $req) {
    $data = json_decode($req->getContent(), true);
    $data["test"] = 123;

    return $data;
});
