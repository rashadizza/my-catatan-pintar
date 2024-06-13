<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    public function index()
    {
        $note = auth()->user()->notes;
        return response()->json($note, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $note = new note($validatedData);
        $note->user()->associate(auth()->user());
        $note->save();

        return response()->json(['message' => 'note created successfully!', 'note' => $note], 201);
    }

    public function update(Request $request, $id)
    {
        $note = note::findOrFail($id);
        $request->validate([    
            'title' => 'required',
            'text' => 'required',
        ]);

        $note = auth()->user()->notes()->findOrFail($id);
        $note->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return response()->json(['success' => 'Note has been edited', 'note' => $note]);
    }

    public function destroy($id)
    {
        $note = auth()->user()->notes()->findOrFail($id);
        $note->delete();

        return response()->json(['message' => 'note deleted successfully!'], 200);
    }
}
