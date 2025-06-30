<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ActivityController::class)->prefix('activity')->name('activity.')->group(function () {
    Route::get('/all', 'allActivities')->name('all');
    Route::get('/create', 'create')->name('create');
    Route::post('/send', 'sendActivity')->name('send');
    Route::get('/delete/{activity}', 'delete')->name('delete');
    Route::get('/{activity}', 'permalink')->name('permalink');
    Route::get('/edit/{activity}', 'edit')->name('edit');
    Route::put('/update/{activity}', 'update')->name('update');

});

Route::view('/training','training/home')->name('training.home');

