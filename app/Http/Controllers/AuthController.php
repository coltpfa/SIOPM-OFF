<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            'user'=>'required',
            'password' => 'required'
        ]);


        $user = User::where('user',$login['user'])->first();
        if (!empty($user) && password_verify($login['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('dash');
        }

        Session::flash('message','Usuário ou senha invalidos');
        Session::flash('color','danger');
        return redirect()->route('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
