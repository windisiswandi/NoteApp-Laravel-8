<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
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
Route::get("/notes/detail/{note:slug}", [NoteController::class, 'find_note'])->name('detail-note');
Route::get("/notes/update/{note:slug}", [NoteController::class, 'form_update'])->name('form-update');
Route::get("/notes/add", [NoteController::class, "form_create"])->name("form-tambah");
Route::get("/categories", [CategoryController::class, "categories"])->name("categories");
Route::get("/categories/{category:slug}", [CategoryController::class, "categoriesById"])->name("categoriesById");
Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");

Route::post("/note", [NoteController::class, 'create'])->name("create-note");
Route::post("/register", [AuthController::class, 'store'])->name("store");


Route::put("/note", [NoteController::class, 'update'])->name("update-note");


Route::delete("/notes/{id}", [NoteController::class, 'delete'])->name('delete-note');

