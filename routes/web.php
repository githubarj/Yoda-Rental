<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\EmailsController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::get('category', [FrontendController::class, 'category']);
Route::get('view-category/{slug}', [FrontendController::class, 'viewcategory']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email', function(){
    Mail::to('jeremygithuba@icloud.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

//Route::get('/email', [EmailsController::class, 'email']);



Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::get('add-category', 'Admin\CategoryController@add');
    Route::post('insert-category', 'Admin\CategoryController@insert');
    Route::get('edit-prod/{id}', [CategoryController::class,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);

    Route::get('edit-product/{id}', [ProductController::class, 'edit'] );
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewusers']);
    Route::get('edit-user/{id}', [DashboardController::class, 'editusers']);
    Route::put('update-user/{id}', [DashboardController::class, 'update']);
    Route::get('delete-user/{id}', [DashboardController::class, 'destroy']);
    
    });


