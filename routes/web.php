<?php

use App\Http\Controllers\Mecanicien\MecanicienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Garage\GarageController;

Route::get('/', [AdminController::class, 'index']); 

Route::get('garage', [GarageController::class, 'index']); 
Route::get('create-garage', [GarageController::class, 'create']); 
Route::post('add-garage', [GarageController::class, 'store'])->name('garage.store');
Route::get('edit-garage/{id}', [GarageController::class, 'edit']); 
Route::put('update-garage/{id}', [GarageController::class, 'update']); 
Route::get('delete-garage/{id}', [GarageController::class, 'destroy']);

Route::get('mecaniciens', [MecanicienController::class, 'index']); 
Route::get('create-mecanicien', [MecanicienController::class, 'create']); 
Route::post('add-mecanicien', [MecanicienController::class, 'store'])->name('mecanicien.store');
Route::get('edit-mecanicien/{id}', [MecanicienController::class, 'edit']); 
Route::put('update-mecanicien/{id}', [MecanicienController::class, 'update']); 
Route::get('delete-mecanicien/{id}', [MecanicienController::class, 'destroy']);
