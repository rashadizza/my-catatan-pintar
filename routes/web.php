<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::get('/', function () {
    return view('welcome');
});

// Homepage
Route::get('/CPhomepage', function () {
    return view('homepage');
});

// Note
Route::get('/note', function () {
    return view('note');
});

// ToDoList
Route::get('/todolist', [ToDoListController::class, 'index']);
Route::post('/todolist', [ToDoListController::class, 'store']);

// Timer
Route::get('/timer', function () {
    return view('timer');
});

// Reminder
Route::get('/reminder', function () {
    return view('reminder');
});
Route::get('/add-reminder', function () {
    return view('add_reminder');
});

// Password Manager
Route::get('/passwords', [PasswordController::class, 'index'])->name('passwords.index');
Route::get('/passwords/create', [PasswordController::class, 'create'])->name('passwords.create');
Route::post('/passwords', [PasswordController::class, 'store'])->name('passwords.store');
Route::get('/passwords/{id}/edit', [PasswordController::class, 'edit'])->name('passwords.edit');
Route::put('/passwords/{id}', [PasswordController::class, 'update'])->name('passwords.update');
Route::delete('/passwords/{id}', [PasswordController::class, 'destroy'])->name('passwords.destroy');

// Music Player
Route::get('/musicplayer', function () {
    return view('musicplayer');
});