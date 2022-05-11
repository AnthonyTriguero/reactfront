<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InterestedController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(InterestedController::class)->group(function(){
    Route::get('/interesteds','index');
    Route::post('/interested','store');
    Route::get('/interested/{id}','show');
    Route::put('/interested/{id}','update');
    Route::delete('/interested/{id}','destroy');     
});