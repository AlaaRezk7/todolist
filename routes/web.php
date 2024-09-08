<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/',[todoController::class,'index'])->name("todo.home");
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//edit todo route
Route::get('/edit/{id}', [todoController::class,'edit'] )->name("todo.edit");

//update todo route 
Route::post('/update',[todoController::class,'updateData'] )->name("todo.updateData");

//create todo route
Route::post('/create',[todoController::class,'store'] )->name("todo.store");
//delete todo route
Route::get('/delete/{id}',[todoController::class,'delete'] )->name("todo.delete");