<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\noteController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/CPhomepage', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    // Note
    Route::get('/note', [noteController::class, 'index'])->name('notes.index');
    Route::get('/note/note/{id}', [noteController::class, 'note'])->name('notes.note');
    Route::get('/note/add', [noteController::class, 'add'])->name('notes.add');
    Route::get('/note/delete/{id}', [noteController::class, 'delete'])->name('notes.delete');
    Route::get('/note/edit/{id}', [noteController::class, 'edit'])->name('notes.edit');
    Route::post('/note/save', [noteController::class, 'save'])->name('notes.save'); 

    // ToDoList
    Route::get('/todolist', [ToDoListController::class, 'index']);
    Route::post('/todolist', [ToDoListController::class, 'store']);
    Route::patch('/todolist/{todo}', [ToDoListController::class, 'update']);
    Route::delete('/todolist/{todo}', [ToDoListController::class, 'destroy']);

    // Timer
    Route::get('/timer', [TimerController::class, 'index']);

    // Reminder
    // Route::get('/reminder', function () {
    //     return view('reminder');
    // });
    Route::get('/add-reminder', [ReminderController::class, 'create'])->name('reminders.create');
    Route::resource('reminders', ReminderController::class);

    // Password Manager
    Route::get('/passwords', [PasswordController::class, 'index'])->name('passwords.index');
    Route::get('/passwords/create', [PasswordController::class, 'create'])->name('passwords.create');
    Route::post('/passwords', [PasswordController::class, 'store'])->name('passwords.store');
    Route::get('/passwords/{id}/edit', [PasswordController::class, 'edit'])->name('passwords.edit');
    Route::put('/passwords/{id}', [PasswordController::class, 'update'])->name('passwords.update');
    Route::delete('/passwords/{id}', [PasswordController::class, 'destroy'])->name('passwords.destroy');

    // Music Player
    Route::get('/musicplayer', [SongController::class, 'index'])->name('songs.index');
    Route::post('/musicplayer/store', [SongController::class, 'store'])->name('songs.store');
    Route::delete('/musicplayer/{id}', [SongController::class, 'destroy'])->name('songs.destroy');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
