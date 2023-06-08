<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email'=>'required|email:rfc,dns',
            'password' => 'required|string|min:6|max:25'
        ]);

        Auth::attempt($login);

        return redirect()->route('dash');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
