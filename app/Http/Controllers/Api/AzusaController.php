<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

class AzusaController extends Controller
{
    public function index()
    {
        print('test');
        $id = auth()->user()->id;
        print('test2');
        $data = auth()->user()->users()->findOrFail($id);
        print('test3');
        return response()->json($data);
    }
}