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

Route::get("/success/{slug}", function ($data) {
    return "ini note $note";
});

Route::get("/note/add", [NoteController::class, "form_create"])->name("form-tambah");
Route::post("/note/create", function (Request $request) {
    $title = $request->input('title');
    return redirect('/success/$title');
})->name("create-note");

