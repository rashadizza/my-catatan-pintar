<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToDoList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        Log::info('Update request received', ['user_id' => Auth::id(), 'request' => $request->all()]);

        $todo = ToDoList::where('user_id', Auth::id())->findOrFail($id);

        $validatedData = $request->validate([
            'isDone' => 'required|boolean',
        ]);

        $todo->update(['isDone' => $validatedData['isDone']]);

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
