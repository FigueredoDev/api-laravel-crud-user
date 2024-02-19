<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/users/{id}", [UserController::class, 'show'])->name('users.show');
Route::get("/users", [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');


Route::get('/', function () {
    return response()->json([
        "message" => "Hello world"
    ]);
});
