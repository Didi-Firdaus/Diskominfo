<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
//     return view('main.home');
// });

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-kelurahan', [PageController::class, 'profil_kelurahan'])->name('profil_kelurahan');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
