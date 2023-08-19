<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/edit', function () {
    return view('editstts');
});

Route::get('/home', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/saveblog', [PostController::class, 'store']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::put('/updateblog/{id}', [PostController::class, 'update']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);


// Route::get('/passdata', function () {
//     $nama="Nasta Arina";
//     return view('passingdata', compact('nama'));
// });

// Route::get('/passdata2', function () {
//     $identas['nama']="Nasta Arina";
//     $identas['sekolah']="Palcomtect Opi";
//     $a=3;
//     $b=6;
//     $usia=30;
//     $namasiswa=array('Nasta', 'akbar', 'jua', 'inntan', 'nabila', 'putri');
//     return view('passingdata', $identas, compact('a','b', 'usia', 'namasiswa'));
// });
