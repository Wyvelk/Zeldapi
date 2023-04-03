<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Monster;

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

Route::get("/monsters", function() {
    return Monster::all();
});

Route::get("/monsters/{region}", function(Request $resquest, $region){
    return Monster::where("biome", "LIKE", '%'.$region.'%')->get();
});

Route::post("/add", function(Request $request){
    $monster = new \App\Models\Monster();
    $monster->name = $request->name;
    $monster->species = $request->species;
    $monster->type = $request->type;
    $monster->color = $request->color;
    $monster->description = $request->description;
    $monster->img_url = $request->img_url;
    $monster->loots = $request->loots;
    $monster->biome = $request->biome;
    $monster->save();

    return $monster;
});
