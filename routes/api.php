<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;

Route::apiResource('login', UsersController::class);
Route::post('iniciar_sesion',[UsersController::class,'loginIniciar']);

 Route::middleware('auth:sanctum')->group(function (){
    Route::post('logout', [UsersController::class,'logout']);
});


