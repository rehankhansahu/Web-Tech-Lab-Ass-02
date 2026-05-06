<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;

// READ + SEARCH
Route::get('/', [UserRegistrationController::class, 'index']);

// CREATE PAGE
Route::get('/create', [UserRegistrationController::class, 'create']);

// STORE DATA
Route::post('/store', [UserRegistrationController::class, 'store']);

// EDIT PAGE
Route::get('/edit/{id}', [UserRegistrationController::class, 'edit']);

// UPDATE DATA
Route::post('/update/{id}', [UserRegistrationController::class, 'update']);

// DELETE DATA
Route::get('/delete/{id}', [UserRegistrationController::class, 'delete']);