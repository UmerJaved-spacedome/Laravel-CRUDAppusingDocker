<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show',[testcontroller::class,'show'])->name('test.show');
Route::post('/enterdb',[testcontroller::class,'enterdb'])->name('test.enterdb');
Route::get('/data',[testcontroller::class,'showdata'])->name('showsubmitteddata');
Route::get('/update/{id}',[testcontroller::class,'updatedata'])->name('updatedata');
Route::post('/update/{id}',[testcontroller::class,'update'])->name('update');
Route::get('/table',[testcontroller::class,'table'])->name('table');
Route::delete('/delete/{id}',[testcontroller::class,'destroy'])->name('delete');