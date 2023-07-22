<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = User::all();
        return view('users.index', [
            'users' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = $request->validate([
            'name' => 'required|min:6|max:60',
            'user' => 'required|min:6|unique:users,user,',
            'level' => 'required|int|min:1',
            'password' => 'required|string|min:6|max:25',
        ]);

        $create['user_create'] = \Auth::user()->id;
        $user = User::create($create);
        return redirect()->route('users.index')->with(['color' => 'success', 'message' => 'Usuário cadastrado com sucesso!']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $id)
    {
        return view('users.edit', [
            'user' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id)
    {
        $update = $request->validate([
            'name' => 'required|min:6|max:60',
            'user' => 'required|min:6|unique:users,user,' . $id->id . ',id',
            'level' => 'required|int|min:1',
            'password' => 'nullable',
        ]);

        if (empty($update['password'])) {
            unset($update['password']);
        }else{
            $update['password'] = bcrypt($update['password']);
        }

        $update['user_update'] = \Auth::user()->id;
        $update['user_update_time'] = now();

        $id->update($update);
        return redirect()->route('users.index')->with(['color' => 'success', 'message' => 'Usuário atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        if($id->id == \Auth::user()->id){
            return redirect()->route('users.index')->with(['color' => 'danger', 'message' => 'Usuário não pode se remover!']);
        }
        $deleted['user_deleted'] = \Auth::user()->id;
        $id->update($deleted);
        $id->delete();

        return redirect()->route('users.index')->with(['color' => 'success', 'message' => 'Usuário removido com sucesso!']);
    }

    public function setTheme(Request $request)
    {
        $user = \Auth::user();
        $user->update([
            'theme' => $request->get('theme', 'light'),
        ]);
        $user->save();
        $user->refresh();

        return response()->noContent();
    }
}
