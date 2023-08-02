<?php

namespace App\Http\Controllers;

use App\Models\Gerenciarcpa;
use Illuminate\Http\Request;

class GerenciarcpaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gerenciarcpa');
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
    public function show(Gerenciarcpa $gerenciarcpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gerenciarcpa $gerenciarcpa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gerenciarcpa $gerenciarcpa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gerenciarcpa $gerenciarcpa)
    {
        //
    }
}
