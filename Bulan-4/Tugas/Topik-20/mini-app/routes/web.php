<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//API route for register new user
Route::post('/register', [APIController::class, 'register'])->name('register');
//API route for login user
Route::post('/login', [APIController::class, 'login'])->name('login');
//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [APIController::class, 'logout']);

    //Barang route for showing data
    Route::get('/show', [BarangController::class, 'show']);

    //Route group create, delete and update
    Route::post('/create', [BarangController::class, 'create']);
    Route::delete('/delete/{id}', [BarangController::class, 'delete']);
    Route::post('/update/{id}', [BarangController::class, 'update']);
});
