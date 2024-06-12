<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToDoList;
use Illuminate\Support\Facades\Auth;

class ToDoListApiController extends Controller
{
    public function index()
    {
        // Hanya menampilkan ToDo list milik pengguna yang sedang login
        $todolist = auth()->user()->todolists;
        return response()->json($todolist, 200);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string'
        ]);

        // Menyimpan ToDo list dengan menambahkan user_id yang sesuai
        $todo = new ToDoList($attributes);
        $todo->user()->associate(auth()->user());
        $todo->save();

        return response()->json($todo, 201);
    }

    public function show($id)
    {
        // Memastikan hanya pemilik yang bisa melihat detail
        $todo = ToDoList::where('user_id', Auth::id())->findOrFail($id);

        return response()->json($todo);
    }

    public function update(Request $request, $id)
    {
        // Memastikan hanya pemilik yang bisa mengupdate
        $todo = ToDoList::where('user_id', Auth::id())->findOrFail($id);

        $todo->update($request->all());

        return response()->json($todo, 200);
    }

    public function destroy($id)
    {
        // Memastikan hanya pemilik yang bisa menghapus
        $todo = ToDoList::where('user_id', Auth::id())->findOrFail($id);

        $todo->delete();

        return response()->json(null, 204);
    }
}
