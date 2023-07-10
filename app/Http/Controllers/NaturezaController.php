<?php

namespace App\Http\Controllers;

use App\DataTables\NaturezaDataTable;
use App\Models\Natureza;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NaturezaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NaturezaDataTable  $dataTable)
    {
        return $dataTable->render('stq.index',[]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = $request->validate([
            'code' => 'required',
            'references' => 'required',
        ]);

        $natureza = Natureza::create($create);

        return redirect()->route('stq.edit',$natureza->id)->with(['message'=> 'Natureza criada com sucesso!', 'color'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stq = Natureza::findOrFail($id);
        return view('stq.edit', ['stq' => $stq]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = $request->validate([
            'code' => 'required',
            'references' => 'required',
        ]);

        $stq = Natureza::findOrFail($id);
        $stq->update($update);

        return redirect()->route('stq.edit',$stq->id)->with(['message'=> 'Natureza atualizada com sucesso!', 'color'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
