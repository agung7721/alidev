<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::resource('admin/jamaahs', JamaahController::class);
Route::resource('admin/barangs', BarangController::class);

Route::get('/admin/barangs', [BarangController::class, 'index'])->name('admin.barangs.index');
Route::get('/admin/barangs/create', [BarangController::class, 'create'])->name('admin.barangs.create');
Route::post('/admin/barangs', [BarangController::class, 'store'])->name('barangs.store');


Route::get('/admin/jamaahs/{id}', [JamaahController::class, 'show'])->name('admin.jamaahs.show');
Route::get('/admin/orders/{order_number}', [JamaahController::class, 'showOrder'])->name('admin.orders.show');


Route::get('/abarangs/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->name('barangs.destroy');
Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('barangs', BarangController::class);
});

Route::get('/admin/barangs/{barang}/edit', 'BarangController@edit')->name('admin.barangs.edit');
Route::put('/admin/barangs/{barang}', 'BarangController@update')->name('admin.barangs.update');



