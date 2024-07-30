<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ContentController::class, 'index'])->name('contents.index');
Route::get('contents/create', [ContentController::class, 'create'])->name('contents.create');
Route::post('contents', [ContentController::class, 'store'])->name('contents.store');
Route::get('contents/{id}', [ContentController::class, 'show'])->name('contents.show');
Route::get('contents/{id}/edit', [ContentController::class, 'edit'])->name('contents.edit');
Route::put('contents/{id}', [ContentController::class, 'update'])->name('contents.update');
Route::delete('contents/{id}', [ContentController::class, 'destroy'])->name('contents.destroy');