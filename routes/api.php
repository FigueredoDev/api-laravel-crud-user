<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);

Route::get('/', function () {
    return response()->json([
        "message" => "Hello world"
    ]);
});
