<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReminderController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reminders = auth()->user()->reminders;
        return view('reminder', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-reminder');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->route('reminders.index')->with('success', 'Reminder created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        $this->authorize('delete', $reminder);
        $reminder->delete();
        return redirect()->route('reminders.index')->with('success', 'Reminder deleted successfully!');
    }
}
