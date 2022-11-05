<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\BarangController;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/User', function (Request $request) {
    return $request->user();

});
//Route home
Route::get('/', [APIController::class, 'home']);
//API route for register new user
Route::post('/register', [APIController::class, 'register']);
//API route for login user
Route::post('/login', [APIController::class, 'login']);


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
    Route::post('/delete', [BarangController::class, 'delete']);
    Route::post('/update/{id}', [BarangController::class, 'update']);
});


//Barang route for crated
// Route::post('/create', [BarangController::class, 'create'])->middleware('auth:sanctum');

//Route Barang for Delete
// Route::post('/delete', [BarangController::class, 'delete'])->middleware('auth:sanctum');

//Route barang for update
// Route::post('/update', [BarangController::class, 'update'])->middleware('auth:sanctum');

