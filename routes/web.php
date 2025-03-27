<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ActivityController::class)->prefix('/activity')->name('activity.')->group(function (){
    Route::get('/all','allActivities')->name('all');
});
