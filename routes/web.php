<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NoticeController;
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


    //Notice
    Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
    Route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
    Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');
    Route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
    Route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
    Route::get('/notice/{id}/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');


    //Item
    Route::get('/items',[ItemController::class,'index'])->name('items.index');
    Route::get('/items/create',[ItemController::class,'create'])->name('items.create');
    Route::post('/items/store',[ItemController::class,'store'])->name('items.store');
    Route::get('/items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
    Route::post('/items/{id}/update',[ItemController::class,'update'])->name('items.update');
    Route::get('/items/{id}/destroy',[ItemController::class,'destroy'])->name('items.destroy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
