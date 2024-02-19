<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get("/users/{id}", [UserController::class, 'show'])->name('users.show');
Route::get("/users", [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/', function () {
    return response()->json([
        "message" => "Hello world"
    ]);
});
