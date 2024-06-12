<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Password;

class PasswordApiController extends Controller
{
    public function index()
    {
        // Hanya menampilkan passwords milik pengguna yang autentikasi
        //$passwords = auth()->user()->passwords()->get()->map(function ($password) {
        //    $password->email = decrypt($password->email_encrypted);
        //    $password->password = decrypt($password->password_encrypted);
        //    return $password;
        //});
    
        //return response()->json($passwords);
    
        $passwords = auth()->user()->passwords;
        return response()->json($passwords, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'account' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Membuat instance baru dari Password dan mengaitkannya dengan pengguna yang terautentikasi
        $passwordenc =([
            'account' => $request->account,
            'email_encrypted' => encrypt($request->email),
            'password_encrypted' => encrypt($request->password),
        ]);

        $password = new Password($passwordenc);
        $password->user()->associate(auth()->user());
        $password->save();

        return response()->json(['success' => 'Account has been added', 'password' => $password], 201);
    }

    public function show($id)
    {
        // Cari password milik pengguna yang autentikasi
        $password = auth()->user()->passwords()->findOrFail($id);
        $password->email = decrypt($password->email_encrypted);
        $password->password = decrypt($password->password_encrypted);
        return response()->json($password);
    }

    public function update(Request $request, $id)
    {
        $password = Password::findOrFail($id);
        $request->validate([
            'account' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        // Update password milik pengguna yang autentikasi
        $password = auth()->user()->passwords()->findOrFail($id);
        $password->update([
            'account' => $request->account,
            'email_encrypted' => encrypt($request->email),
            'password_encrypted' => encrypt($request->password),
        ]);

        return response()->json(['success' => 'Account has been edited', 'password' => $password]);
    }

    public function destroy($id)
    {
        // Hapus password milik pengguna yang autentikasi
        $password = auth()->user()->passwords()->findOrFail($id);
        $password->delete();

        return response()->json(['success' => 'Account has been deleted']);
    }
}

