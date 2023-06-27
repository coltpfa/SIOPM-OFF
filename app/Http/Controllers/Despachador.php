<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Despachador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?Request $request)
    {
        if(empty(\Session::has('batalhao'))){
            return redirect()->route('dash')->with(['message' => 'Necessário selecionar um batalhão antes de continuar', 'color' => 'danger']);
        }
        return view('despachador',[
            'user'=>Auth::user(),
            'batalhao'=>\Session::get('batalhao'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
