<?php

namespace App\Http\Controllers;

use App\Models\Cadastro190;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth; // uso da autenticação do usuario logado
use Carbon\Carbon;

class Cadastro190Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cad190 = Cadastro190::all();
        return view('cadastro190', compact('cad190'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            //Roles de validación
            $rules = [
                'inputCidade' => 'required',
                'inputEndereco' => 'required',
                'inputNumero' => 'required',
                'inputBairro' => 'required',
                'inputBatalhao' => 'required',
                'inputCompanhia' => 'required',
                'inputNaturezaocorrencia' => 'required',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'inputTelefone.required' => 'Campo obrigatório',
                'inputCidade.required' => 'Campo obrigatório',
                'inputEndereco.required' => 'Campo obrigatório',
                'inputNumero.required' => 'Campo obrigatório',
                'inputBairro.required' => 'Campo obrigatório',
                'inputBatalhao.required' => 'Campo obrigatório',
                'inputCompanhia.required' => 'Campo obrigatório',
                'inputNaturezaocorrencia.required' => 'Campo obrigatório',
                'historico.required' => 'Campo obrigatório',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            } else { // criado novo categoria
                date_default_timezone_set('America/Sao_Paulo');
                $ocorrencia = new Cadastro190;
                $ocorrencia->nome = Auth::user()->identificacao.' '. Auth::user()->name;
                $ocorrencia->horario = Carbon::now();
                $ocorrencia->solicitante = e($request->inputSolicitante);
                $ocorrencia->anonimo = isset($request->checkboxAnonimo) ? 1 : 0;
                $ocorrencia->telefone = e($request->inputTelefone);
                $ocorrencia->cidade = e($request->inputCidade);
                $ocorrencia->endereco = e($request->inputEndereco);
                $ocorrencia->numero = e($request->inputNumero);
                $ocorrencia->complemento = e($request->inputComplemento);
                $ocorrencia->bairro = e($request->inputBairro);
                $ocorrencia->referencia = e($request->inputReferencia);
                $ocorrencia->bpmm = e($request->inputBatalhao . ' - ' . $request->inputCompanhia);
                $ocorrencia->naturezaocorrencia = e($request->inputNaturezaocorrencia);
                $ocorrencia->policialemperigo = isset($request->checkPolicial) ? 1 : 0;
                $ocorrencia->celular_numeroimei = e($request->inputHidden_celular_numeroimei);
                $ocorrencia->celular_modelo = e($request->inputHidden_celular_modelo);
                $ocorrencia->celular_marca = e($request->inputHidden_celular_marca);
                $ocorrencia->celular_situacao = e($request->inputHidden_celular_situacao);
                $ocorrencia->veiculo_placa = e($request->inputHidden_veiculo_placa);
                $ocorrencia->veiculo_marca = e($request->inputHidden_veiculo_marca);
                $ocorrencia->veiculo_modelo = e($request->inputHidden_veiculo_modelo);
                $ocorrencia->veiculo_cor = e($request->inputHidden_veiculo_cor);
                $ocorrencia->veiculo_chassi = e($request->inputHidden_veiculo_chassi);
                $ocorrencia->veiculo_situacao = e($request->inputHidden_veiculo_situacao);
                $ocorrencia->pessoas_rg = e($request->inputHidden_pessoas_rg);
                $ocorrencia->pessoas_nome = e($request->inputHidden_pessoas_nome);
                $ocorrencia->pessoas_situacao = e($request->inputHidden_pessoas_situacao);
                $ocorrencia->status = 0;
                $ocorrencia->visualizacao = 0;
                $ocorrencia->atendimento = 0;
                $ocorrencia->situacao = 0;
                $ocorrencia->log = "";
                $ocorrencia->id_user = Auth::user()->id;
                $ocorrencia->matricula = Auth::user()->matricula;
                if ($ocorrencia->save()) {
                    return view('pageQuestion', compact('ocorrencia'));
                    // return redirect()->back()->with('message', 'Ok! Ocorrência registrada com sucesso!');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Ocorrência já cadastrada.');
            }
        }
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
    public function show(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadastro190 $cadastro190)
    {
        //
    }
}
