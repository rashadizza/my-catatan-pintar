<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class noteController extends Controller
{
    public function index() {
        $note = auth()->user()->notes;

        return view('note.index', [
            'notes' => $note
        ]);
    }

    public function note($id) {
        $note = Note::findOrFail($id);
        
        return view('note.note', [
            'note' => $note
        ]);
    }

    public function delete($id) {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.index');
    }

    public function edit($id) {
        $note = Note::findOrFail($id);
        return view('note.form', [
            'note' => $note
        ]);
    }

    public function add() {
        return view('note.form');
    }

    public function create() {
        return view('note.create');
    }

    public function save(Request $request) {
        if ($request->has('id')) {
            $note = Note::findOrFail($request->input('id'));
        } else {
            $attributes = $request->validate([
                'title' => 'required',
                'text' => 'required'
            ]);
    
            auth()->user()->notes()->create($attributes);
        }

        return redirect()->route('notes.index');
    }
}
