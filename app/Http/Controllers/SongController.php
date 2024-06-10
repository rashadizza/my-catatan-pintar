<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    // public function store(Request $request)
    // {
    //     $song = Song::create($request->all());
    //     return response()->json($song, 201);
    // }
    public function index()
    {
        $songs = Song::all();
        return response()->json($songs);
    }
}

