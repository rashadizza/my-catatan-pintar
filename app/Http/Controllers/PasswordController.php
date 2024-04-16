<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Password;

class PasswordController extends Controller
{
    public function index()
    {
    $passwords = Password::all()->map(function ($password) {
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

        $password = new Password();
        $password->account = $request->account;
        $password->email_encrypted = encrypt($request->email); // Encrypt email before storing
        $password->password_encrypted = encrypt($request->password); // Encrypt password before storing
        $password->save();

        return redirect()->route('passwords.index')->with('success', 'Account has been added');
    }


    public function edit($id)
    {
        $password = Password::findOrFail($id);
        $password->email = decrypt($password->email_encrypted); // Decrypt email for editing
        $password->password = decrypt($password->password_encrypted); // Decrypt password for editing
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
        
        $password->account = $request->account;
        $password->email_encrypted = encrypt($request->email); // Encrypt email before storing
        $password->password_encrypted = encrypt($request->password); // Encrypt password before storing
        $password->save();

        return redirect()->route('passwords.index')->with('success', 'Account has been edited');
    }



    public function destroy($id)
    {
        $password = Password::findOrFail($id);
        $password->delete();

        return redirect()->route('passwords.index')->with('success', 'Account has been deleted');
    }



    public function create()
    {
        return view('tambah-akun_view', [
            'action' => 'passwords.store', 
            'method' => 'POST',
            'password' => (object)[
                'id' => '', // No ID for new entries
                'account' => '',
                'email' => '',
                'password' => ''
            ]
        ]);
    }



}

