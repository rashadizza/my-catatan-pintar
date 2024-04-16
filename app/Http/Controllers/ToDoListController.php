<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class ToDoListController extends Controller
{
    public function index(){
        return view('todolist');
    }

    public function stote(){
        $atributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        ToDoList::create($atributes);
        
        return redirect('/');
    }
}
