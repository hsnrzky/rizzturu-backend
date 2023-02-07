<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Hasan Rizky",
        "email" => "hasanrizky0405@gmail.com",
        "image" => "aku.png"

    ]);
});


Route::get('/posts', [
    PostController::class, 'index'
]);

//halaman post single
Route::get('/posts/{post:slug}', [
    PostController::class, 'show'
]);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});
//Route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);




Route::middleware('auth')->group(function () {
    //Route Dashboard
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    })->middleware('auth');


    //Route untuk memanggil slug
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    //Route Dashboard Post with Resource Controller
    Route::resource('/dashboard/posts', DashboardPostController::class);
});

Route::middleware('admin')->group(function () {
    //Route Dashboard User
    //admin
    Route::get('/dashboard/user', function() {
        return view('dashboard.admin.user', [
            'users' => User::all(),
        ]);
    });

    //Route untuk mmanggil slug
    //admin
    Route::get('/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug']);
    //Route Dashboard Category with Resource Controller
    Route::resource('/dashboard/categories', CategoryController::class)->except('show');
});
