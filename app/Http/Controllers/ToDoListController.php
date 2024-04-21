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
            'title' => 'required',
            'description' => 'nullable'
        ]);

        // Menyimpan ToDo list dengan menambahkan user_id yang sesuai
        auth()->user()->todolists()->create($attributes);
        
        return redirect('/todolist');
    }

    public function update(ToDoList $todo)
    {
        $todo->update(['isDone' => !$todo->isDone]);
        return redirect('/todolist');
    }
    
    public function destroy(ToDoList $todo)
    {
        $todo->delete();
        return redirect('/todolist');
    }
}
