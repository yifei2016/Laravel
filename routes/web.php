<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',function(){
	// echo "<h1>hello i am about</h1>";
	return view('user');
});
Route::get('/ages',function(){
    $age = [
    	"yifei" => 27,
    	"chuan" => 28
    	];

    $age["jackie"] = 2;
    $keys = array_keys($age);

    return response()
    			->view('age', ['data' => $age, 'keys' => $keys], 200);//second is data to be used in template, third is http status code
    //return response()->json($age);//client render
});
