<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Password;

class PasswordController extends Controller
{
    public function index()
    {
        // Hanya menampilkan passwords milik pengguna yang autentikasi
        $passwords = auth()->user()->passwords()->get()->map(function ($password) {
            $password->email = decrypt($password->email_encrypted);
            $password->password = decrypt($password->password_encrypted);
            return $password;
        });
    
        return view('pass-man_view', compact('passwords'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'account' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Membuat instance baru dari Password dan mengaitkannya dengan pengguna yang terautentikasi
        auth()->user()->passwords()->create([
            'account' => $request->account,
            'email_encrypted' => encrypt($request->email),
            'password_encrypted' => encrypt($request->password),
        ]);

        return redirect()->route('passwords.index')->with('success', 'Account has been added');
    }


    public function edit($id)
    {
        // Cari password milik pengguna yang autentikasi
        $password = auth()->user()->passwords()->findOrFail($id);
        $password->email = decrypt($password->email_encrypted);
        $password->password = decrypt($password->password_encrypted);
        return view('tambah-akun_view', [
            'password' => $password,
            'action' => 'passwords.update', // This should match the route name for updating accounts
            'method' => 'PUT' // Since you're updating an account, the method should be PUT
        ]);
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

        return redirect()->route('passwords.index')->with('success', 'Account has been edited');
    }



    public function destroy($id)
    {
        // Hapus password milik pengguna yang autentikasi
        $password = auth()->user()->passwords()->findOrFail($id);
        $password->delete();

        return redirect()->route('passwords.index')->with('success', 'Account has been deleted');
    }



    public function create()
    {
        // Data placeholder untuk view
        $password = new Password;

        return view('tambah-akun_view', [
            'action' => 'passwords.store',
            'method' => 'POST',
            'password' => $password
        ]);
    }



}

