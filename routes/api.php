<?php
/* routes\api.php */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReminderApiController;
use App\Http\Controllers\Api\PasswordApiController;
use App\Http\Controllers\Api\ToDoListApiController; 
use App\Http\Controllers\Api\NoteApiController;
use App\Http\Controllers\Api\AzusaController;

// Registration route
Route::post('/register', [AuthController::class, 'register']);

// Login route
Route::post('/login', [AuthController::class, 'login']);

// Assigning middleware to group of routes
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // profile
    Route::get('/profile', [AzusaController::class, 'index']);

    // note
    Route::get('/note', [NoteApiController::class, 'index']);
    Route::post('/note', [NoteApiController::class, 'store']);
    Route::put('/note/{id}', [NoteApiController::class, 'update']);
    Route::delete('/note/{id}', [NoteApiController::class, 'destroy']);

    // ToDos
    Route::get('/todos', [ToDoListApiController::class, 'index']);
    Route::post('/todos', [ToDoListApiController::class, 'store']);
    Route::get('/todos/{id}', [ToDoListApiController::class, 'show']);
    Route::put('/todos/{id}', [ToDoListApiController::class, 'update']);
    Route::delete('/todos/{id}', [ToDoListApiController::class, 'destroy']);

    // Reminders
    Route::get('/reminders', [ReminderApiController::class, 'index']);
    Route::post('/reminders', [ReminderApiController::class, 'store']);
    Route::delete('/reminders/{reminder}', [ReminderApiController::class, 'destroy']);

    //password manager
    Route::get('/passwords', [PasswordApiController::class, 'index']);
    Route::post('/passwords', [PasswordApiController::class, 'store']);
    Route::get('/passwords/{id}', [PasswordApiController::class, 'show']);
    Route::put('/passwords/{id}', [PasswordApiController::class, 'update']);
    Route::delete('/passwords/{id}', [PasswordApiController::class, 'destroy']);

    //music
    Route::get('/songs', 'App\Http\Controllers\SongController@index');
});
