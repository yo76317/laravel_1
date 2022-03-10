<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;

use App\Http\Controllers\PhotoController;

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

Route::resource('cars',CarController::class);
Route::resource('photos',PhotoController::class);

Route::get('/cars_get_form',[CarController::class,'myForm'])->name('cars.myform123');
Route::post('/cars_get_form',[CarController::class,'myForm'])->name('cars.myform123');



route::get('/',function(){
    return view('greeting',['name' => 'yo1']);
});
