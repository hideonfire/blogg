<?php

use Illuminate\Support\Facades\Route;

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

Route::get('average/{num?}', function ($num = 30) {
	$arr = array();
	$mid = $num/2;
	for($i = 0; $i < $num; $i++){
		$arr[$i] = rand(27,33);
		$arr[$i+$mid]=60 - $arr[$i] ;
	}
	$len=count($arr);
    for ($j = 0; $j <$len; $j++) { 
    	echo $arr[$j]."</br>";
    }
});
