<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\carController;
 
use App\Http\Controllers\catController;

use App\Http\Controllers\moneyController;

use App\Http\Controllers\dogController;

use App\Http\Controllers\photoController;


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

Route::get('/test', function () {
    return view('test');
});

Route::get('/student/{name}', function ($name) {
    return '這 '.$name;
    
    // return view('student',['name123' => $name]);
});

Route::get('car', [carController::class, 'show123']);

Route::get('cat', [catController::class, 'show321']);

Route::get('money', [moneyController::class, 'index']);

Route::get('dog', [dogController::class, 'index']);

Route::resource('photos', PhotoController::class);