<?php
/* routes\api.php */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Assigning middleware to individual route
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReminderApiController;
use App\Http\Controllers\Api\PasswordApiController;
use App\Http\Controllers\Api\ToDoListApiController;



// Registration route
Route::post('/register', [AuthController::class, 'register']);

// Login route
Route::post('/login', [AuthController::class, 'login']);

// Assigning middleware to group of routes
Route::middleware('auth:sanctum')->group(function () {
    // Add your protected API routes here
    // For example:
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // ToDos
    Route::get('/todos', [ToDoController::class, 'index']);
    Route::post('/todos', [ToDoController::class, 'store']);
    Route::get('/todos/{id}', [ToDoController::class, 'show']);
    Route::put('/todos/{id}', [ToDoController::class, 'update']);
    Route::delete('/todos/{id}', [ToDoController::class, 'destroy']);

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
