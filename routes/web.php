<?php

use App\Http\Controllers\Admin\Mecanicien\MecanicienController;
use App\Http\Controllers\Admin\Produit\CategorieController;
use App\Http\Controllers\Admin\Produit\SousCategorieController;
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
Route::get('mecaniciens-deleted', [MecanicienController::class, 'getDeleted']); 
Route::get('create-mecanicien', [MecanicienController::class, 'create']); 
Route::post('add-mecanicien', [MecanicienController::class, 'store'])->name('mecanicien.store');
Route::get('edit-mecanicien/{id}', [MecanicienController::class, 'edit']); 
Route::put('update-mecanicien/{id}', [MecanicienController::class, 'update']); 
Route::get('delete-mecanicien/{id}', [MecanicienController::class, 'destroy']);
Route::get('/mecaniciens/restore/{id}', [MecanicienController::class, 'restore'])->name('mecaniciens.restore');

Route::get('categories', [CategorieController::class, 'index']); 
Route::get('create-categorie', [CategorieController::class, 'create']); 
Route::post('add-categorie', [CategorieController::class, 'store'])->name('categorie.store');
Route::get('edit-categorie/{id}', [CategorieController::class, 'edit']); 
Route::put('update-categorie/{id}', [CategorieController::class, 'update']); 
Route::get('delete-categorie/{id}', [CategorieController::class, 'destroy']);

Route::get('sousCategories', [SousCategorieController::class, 'index']); 
Route::get('create-sousCategorie', [SousCategorieController::class, 'create']); 
Route::post('add-sousCategorie', [SousCategorieController::class, 'store'])->name('sousCategorie.store');
Route::get('edit-sousCategorie/{id}', [SousCategorieController::class, 'edit']); 
Route::put('update-sousCategorie/{id}', [SousCategorieController::class, 'update']); 
Route::get('delete-sousCategorie/{id}', [SousCategorieController::class, 'destroy']);