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
            'user' => 'required',
            'password' => 'required'
        ]);


        $user = User::where('user', $login['user'])->first();
        if (!empty($user) && password_verify($login['password'], $user->password)) {
            Auth::login($user);
            Session::put('ramal', null);
            Session::put('batalhao', null);
            Session::put('cpa', null);
            return redirect()->route('dash');
        }

        Session::flash('message', 'Usuário ou senha invalidos');
        Session::flash('color', 'danger');
        return redirect()->route('auth.login');
    }

    public function dash()
    {
        return view('dash');
    }

    public function dashAction(Request $request)
    {
        $level = $request->get('level', 0);
        $ramal = $request->get('ramal', 0);
        $batalhao = $request->get('batalhao', 0);
        $cpa = $request->get('cpa', 0);

        if (empty($level)) {
            return redirect()->back()->with(['message' => 'Necessário selecionar um nível de acesso', 'color' => 'danger']);
        }

        if ($level > Auth::user()->level) {
            return redirect()->back()->with(['message' => 'Sem permissão de acesso! Contate o administrador!', 'color' => 'danger']);
        }

        if ($level == 1) {
            if (empty($ramal)) {
                return redirect()->back()->with(['message' => 'Necessário selecionar um ramal para continuar.', 'color' => 'danger']);
            }

            Session::put('ramal', $ramal);
            return redirect()->route('ocorrencia');
        }

        if ($level == 2) {
            if (empty($batalhao)) {
                return redirect()->back()->with(['message' => 'Necessário selecionar um batalhão para continuar.', 'color' => 'danger']);
            }

            Session::put('batalhao', $batalhao);
            return redirect()->route('despachador');
        }

        if ($level == 4) {
            if (empty($cpa)) {
                return redirect()->back()->with(['message' => 'Necessário selecionar um CPA para continuar.', 'color' => 'danger']);
            }
            Session::put('cpa', $cpa);
            return redirect()->route('despachador');
        }

        dd($request->all());
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
