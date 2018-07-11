<?php

use Illuminate\Http\Request;

$router->group(["prefix" => "drinks"],
function($router) {
	$router->post("", "Drinks@store");
	$router->get("drinks", "Drinks@index");
	$router->get("{drink}", "Drinks@show");
	$router->put("{drink}", "Drinks@update");
	$router->delete("{drink}", "Drinks@destroy");
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
