<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderApiController extends Controller
{
    public function index()
    {
        $reminders = auth()->user()->reminders;
        return response()->json($reminders, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date_time' => 'required|date',
            'priority' => 'required|in:High,Medium,Low',
        ]);

        $reminder = new Reminder($validatedData);
        $reminder->user()->associate(auth()->user());
        $reminder->save();

        return response()->json(['message' => 'Reminder created successfully!', 'reminder' => $reminder], 201);
    }

    public function destroy(Reminder $reminder)
    {
        // Check if the authenticated user is the owner of the reminder
        if ($reminder->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $reminder->delete();

        return response()->json(['message' => 'Reminder deleted successfully!'], 200);
    }
}
