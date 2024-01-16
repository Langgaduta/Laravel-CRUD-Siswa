<?php

use App\Http\Controllers\SiswaController;
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
//     return view('welcome');
// });

Route::get('/', [SiswaController::class, 'index']);
Route::get('/Siswa', [SiswaController::class, 'index']);
Route::get('/Siswa/create', [SiswaController::class, 'create']);
Route::post('/Siswa/store', [SiswaController::class, 'store']);
Route::get('/Siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::patch('/Siswa/{id}', [SiswaController::class, 'update']);
Route::delete('Siswa/{id}', [SiswaController::class, 'destroy']);
