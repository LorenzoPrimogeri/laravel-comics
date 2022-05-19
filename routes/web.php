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
    $comicsArray = config('comics');
    $comicsDataArray = config('comicsdata');
    return view('index', ["comicsArray" => $comicsArray, "comicsData" => $comicsDataArray]);
});

Route::get('/cardinfo/{id}', function ($id) {
    $comicsArray = config('comics');
    $comicsDataArray = config('comicsdata');
    return view('cardinfo', ["card" => $comicsArray[$id], "comicsData" => $comicsDataArray]);
});
