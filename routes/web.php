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

Route::post('/post', function() {
	dd('asdasasda');
});
// Route::post('/viewwithaform/{num}/{text', function ($numberinput, $textinput) {
//     $input = request()->get('numberinput','textinput');
//     dd($input);
// });

Route::get('/forms', function () {
	return view('viewwithaform');
});

Route::get('/formscalc','formviewController@viewwithaform');

Route::post('/calculating', function () {
	$num1 = request()->get('numberinput1');
	$num2 = request()->get('numberinput2');	 
	//best way to get data from a request is through (request()->get('numberinput1');)
	

	return $num1 + $num2;
});

// Route::get('/randompage', function() {
// 	return 'testing 123';
// });

Route::get('/randompage', [
	'as' => 'randompage',
	'uses' => 'RandomController@index'
]);
	// $input = request()->get('n1''n2');
	// dd($input);
	// return View:'forms'. $numText1+$numText2; don't work
	       // $x = $n1 + $n2  - Doesn't work
	       // return $x
// return view('viewwithaform');



// computer -> get -> server
// server -> data -> computer

// computer -> post (data - 1234) -> server
// server -> data -> computer