<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;

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



Route::get('/', [NoteController::class, 'index'])->name('dashboard');
Route::get("/notes/detail/{id}", [NoteController::class, 'find_note'])->name('detail-note');
Route::get("/notes/update/{id}", [NoteController::class, 'form_update'])->name('form-update');
Route::get("/notes/add", [NoteController::class, "form_create"])->name("form-tambah");

Route::post("/note", [NoteController::class, 'create'])->name("create-note");

Route::put("/note", [NoteController::class, 'update'])->name("update-note");

Route::delete("/notes/{id}", [NoteController::class, 'delete'])->name('delete-note');

