<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
        "title" => "Gudang",
        "posisi" => "absolute"
    ]);
});
Route::get('barang', [
        BarangController::class, 'all_barang',
]);
Route::post('insert', [
    BarangController::class, 'insert_barang'
]);
Route::get('delete/{id}', [
    BarangController::class, 'delete'
]);
Route::get('edit/{id}', [
    BarangController::class, 'edit'
]);
Route::post('update', [
    BarangController::class, 'update'
]);
Route::get('search',[
    BarangController::class, 'search'
]);
Route::view('welcome', 'welcome');
