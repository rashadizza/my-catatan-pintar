<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class ToDoListController extends Controller
{
    public function index()
    {
        // Hanya menampilkan ToDo list milik pengguna yang sedang login
        $todolist = auth()->user()->todolists;

        return view('todolist', [
            'todolist' => $todolist
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string'
        ]);

        // Menyimpan ToDo list dengan menambahkan user_id yang sesuai
        auth()->user()->todolists()->create($attributes);
        
        return redirect('/todolist');
    }

    public function update(ToDoList $todo)
    {
        // Memastikan hanya pemilik yang bisa mengupdate
        $this->authorize('update', $todo);

        $todo->update(['is_done' => !$todo->is_done]);
        return redirect('/todolist');
    }
    
    public function destroy(ToDoList $todo)
    {
        // Memastikan hanya pemilik yang bisa menghapus
        $this->authorize('delete', $todo);

        $todo->delete();
        return redirect('/todolist');
    }
}
