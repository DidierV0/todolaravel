<?php

use App\Http\Controllers\TodoController;
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

Route::get('/',[TodoController::class,'index']); //route listing des taches

Route::post('/add', [TodoController::class,'store'])->name('add'); //route ajout d'une tache

Route::get('/upd/{id}',[TodoController::class,'update'])->name('upd'); //route de maj d'une tache

Route::get('/rmv{id}',[TodoController::class,'remove'])->name('supp'); //route de supression