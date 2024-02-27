<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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
    $notes = \App\Models\Note::all();
    return view('welcome',compact("notes"));
});
Route::get("/notes",[NoteController::class,"index"]);
Route::get("/notes/{id}",[NoteController::class,"show"]);