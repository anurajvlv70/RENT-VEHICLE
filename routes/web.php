<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\carController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bikeHave',[DetailsController::class,'bikeHave']);
Route::post('/bikeHave',[DetailsController::class,'bikeStore']);
// Route::get('/bikeWant',[DetailsController::class,'bikeWant']);
Route::get('/confirm/{id}',[DetailsController::class,'bikeTake'])->name('bikeTake');
Route::get('/bikeEdit/{id}',[DetailsController::class,'edit'])->name('bikeEdit');
Route::get('/bikeDel/{id}',[DetailsController::class,'bikeDel'])->name('bikeDel');
Route::get('/bikeWant',[DetailsController::class,'allRecord'])->name('all-bikedetails');
Route::get('/bikeHave/{id}',[DetailsController::class,'back'])->name('back');
//
Route::get('/carHave',[carController::class,'carHave']);
Route::post('/carHave',[carController::class,'carStore']);
Route::get('/confirm2/{id}',[carController::class,'carTake'])->name('carTake');
Route::get('/carEdit/{id}',[carController::class,'edit2'])->name('carEdit');
Route::get('/carDel/{id}',[carController::class,'carDel'])->name('carDel');
Route::get('/carWant',[carController::class,'allRecord'])->name('all-details');

// Route::post('/carHave',[DetailsController::class,'carStore']);