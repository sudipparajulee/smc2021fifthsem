<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');

Route::get('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
