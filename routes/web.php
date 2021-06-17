<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\MailController;
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


Route::get('/', function (){
    return view('home');
})->name('home');

Route::get('/sendmail',[MailController::class, 'sendEmail']);

Route::put('/editNote/{note}', [NotesController::class, 'showEditNote'])->name('notes.editNote');
Route::post('/editNote', [NotesController::class, 'updateNote'])->name('updateNote');

Route::delete('/notes/{note}', [NotesController::class, 'deleteNote'])->name('notes.deleteNote');

Route::get('/addNote', [NotesController::class, 'showAddNote'])->name('addNote');
Route::post('/addNote', [NotesController::class, 'postNote']);

Route::get('/dashboard', [NotesController::class, 'index'])->name('dashboard');


Route::post("/logout", [LogoutController::class, "logoutUser"])->name("logout");

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "signInUser"]);

Route::get("/register", [RegisterController::class, "index"])->name("register");
Route::post("/register", [RegisterController::class, "registerUser"]);

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

