<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});


Route::get('/chat', function () {
    return view('chat');
});

Route::post('/chat', [App\Http\Controllers\ChatController::class, 'handleChat'])->name('chat');

Auth::routes();

Route::group(['prefix' => 'get'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'searchUser']);
    Route::get('/{id}', [App\Http\Controllers\UserController::class, 'findUser']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
