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

    // Reminders
    Route::get('/reminders', [ReminderApiController::class, 'index']);
    Route::post('/reminders', [ReminderApiController::class, 'store']);
    Route::delete('/reminders/{reminder}', [ReminderApiController::class, 'destroy']);
    Route::get('/songs', 'App\Http\Controllers\SongController@index');
});
