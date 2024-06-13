<?php

// app/Http/Controllers/SongController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        if (request()->header('Accept') === 'application/json') {
            return $this->indexJson();
        } else {
            $songs = Song::all();
            return view('musicplayer', compact('songs'));
        }
    }

    public function indexJson()
    {
        $songs = Song::all();
        return response()->json($songs);
    }


    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required|string',
            'title' => 'required|string',
            'singer' => 'required|string',
        ]);

        Song::create($request->all());

        return redirect()->route('songs.index')->with('success', 'Song added successfully.');
    }

    public function destroy($id)
    {
        $song = Song::findOrFail($id);
        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
