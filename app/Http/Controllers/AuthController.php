<?php

namespace App\Http\Controllers;

use App\Models\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);


        $user = UserTest::where('name', $credentials['usuario'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);

            return redirect()->route('uaslp.select');
        }

        return back()->withErrors(['login_error' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
