<?php

use App\Models\Cadastro190;
use Carbon\Carbon;

?>
@extends('adminlte::page')

@section('title', 'Despacho de Ocorrências')

@section('content_header')
<!-- Seção de cabeçalho -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Despacho de Ocorrências</h1>
                <h6>
                    @if (Cadastro190::where(DB::RAW('date(horario)'), Carbon::today()->toDateString())->count() != 0)
                    Hoje - <span class="badge badge-primary right">
                        {{Cadastro190::count()}}
                    </span>
                    @endif
                </h6>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">
                        Despacho de Ocorrências
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- add daniels -->
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-observar">
                <span class="badge bg-purple"></span>
                <i class="fas fa-check"></i> Observar
            </a>
            @include('modal.despachador.despachador_observar')

            <a class="btn btn-app bg-danger" data-toggle="modal" data-target="#modal-gerarocorrencia">
                <span class="badge bg-teal"></span>
                <i class="fas fa-plus"></i> Gerar
            </a>
            @include('modal.despachador.despachador_gerarocorrencia')

            <a class="btn btn-app bg-secondary" href="http://127.0.0.1:8000/home">
                <span class="badge bg-success"></span>
                <i class="fas fa-users"></i> Alterar
            </a>
        </div>

        <div class="col-md-1">
            <div class="card card-danger card-outline">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 1%; text-align: center;">VTR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $n = 1 @endphp
                        @foreach ($ocorrencias as $ocorrencia)
                        <tr>
                            <td align="center">10205</td>

                            <!-- SERA UM NUMERO ALEATORIO DE 0 A INFINITO PARA CADA UMA SENDO NUMEROS UNICOS E QUE SEMPRE AS 00:00 ZERA A CONTAGEM NOVAMENTE -->
                        </tr>
                        @php $n++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card card-danger card-outline">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 2%;">
                                <input type="checkbox" id="select-all-checkbox">
                            </th>
                            <th style="width: 1%; text-align: center;">⚡️</th>
                            <th style="width: 40%;">Endereço</th>
                            <th style="width: 2%; text-align: center;">Nat</th>
                            <th style="width: 19%;">OPM</th>
                            <th style="width: 10%; text-align: center;">Espera</th>
                            <th style="width: 6%; text-align: center;">Oco</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $n = 1 @endphp
                        @foreach ($ocorrencias as $ocorrencia)
                        <tr>
                            <td><input type="checkbox" class="despacho-checkbox"></td>
                            <td align="center">N</td>
                            <td>{{$ocorrencia["endereco"]}}, {{$ocorrencia["numero"]}}</td>
                            <td align="center">{{ substr($ocorrencia["naturezaocorrencia"], 0, 3) }}</td>
                            <!-- Exibe as três primeiras letras da naturezaocorrencia -->
                            <td>
                                @php
                                // Obtenha o valor da ocorrência
                                $valor = $ocorrencia["bpmm"];

                                // Remova tudo que está antes do primeiro "_"
                                $valor = substr($valor, strpos($valor, '_') + 1);

                                // Substitua o segundo "_" por espaço
                                $valor = str_replace('_', ' ', $valor);
                                @endphp
                                {{ $valor }}
                            </td>

                            <td id="tempo_decorrido_{{$n}}">
                            <?php
                            $createdAt = $ocorrencia['horario'];
                            $currentDateTime = Carbon::now();
                            $timeDifference = $currentDateTime->diff($createdAt);

                            $hours = $timeDifference->format('%h');
                            $minutes = $timeDifference->format('%i');
                            $seconds = $timeDifference->format('%s');

                            ?>
                            <?php

$serverTime = Carbon::now();
echo $serverTime;

                            ?>
                            {{$hours.':'.$minutes.':'.$seconds}}
                            </td>
                            <td align="center">185</td>
                            <!-- SERA UM NUMERO ALEATORIO DE 0 A INFINITO PARA CADA UMA SENDO NUMEROS UNICOS E QUE SEMPRE AS 00:00 ZERA A CONTAGEM NOVAMENTE -->
                        </tr>
                        @php $n++ @endphp
                        <!-- Modal -->
                        <div class="modal fade" id="modal-detalhes">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <style>
                                    .modal-content-full-width {
                                        width: 100%;
                                    }

                                    .modal-textarea-container {
                                        width: 100%;
                                    }
                                </style>
                                <div class="modal-content modal-content-full-width">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Detalhes da Ocorrência</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Conteúdo do modal -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <p><strong>Solicitante:</strong> {{$ocorrencia["solicitante"]}}</p>
                                                    </div>
                                                    <div class="col">
                                                        <p><strong>Telefone:</strong> {{$ocorrencia["telefone"]}}</p>
                                                    </div>
                                                    <div class="col">
                                                        <p><strong>Cidade:</strong> {{$ocorrencia["cidade"]}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p><strong>Endereço:</strong> {{$ocorrencia["endereco"]}}, {{$ocorrencia["numero"]}}</p>
                                                    </div>
                                                    <div class="col">
                                                        <p><strong>Complemento:</strong> {{$ocorrencia["complemento"]}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p><strong>Bairro:</strong> {{$ocorrencia["bairro"]}}</p>
                                                    </div>
                                                    <div class="col">
                                                        <p><strong>Referência:</strong> {{$ocorrencia["referencia"]}}</p>
                                                    </div>
                                                </div>






                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div>
                                                <p></p>
                                                <!-- Botões do modal (exemplos de botões) -->
                                                <style>
                                                    .btn-app {
                                                        width: 100px;
                                                        height: 60px;
                                                        font-size: 10px;
                                                    }

                                                    /* Reduz o tamanho do ícone */
                                                    .btn-app i {
                                                        font-size: 20px;
                                                    }

                                                    /* Centraliza o ícone e o texto verticalmente */
                                                    .btn-app .btn-inner-container {
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        flex-direction: column;
                                                        height: 100%;
                                                    }
                                                </style>

                                                <a class="btn btn-app bg-secondary" data-toggle="modal" data-target="#modal-novo-2">
                                                    <span class="badge bg-purple"></span>
                                                    <div class="btn-inner-container">
                                                        <i class="fas fa-comment"></i>
                                                        <span>Observar</span>
                                                    </div>
                                                </a>
                                                @include('modal.despachador.despachador_observarunica')

                                                <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-novo-2">
                                                    <span class="badge bg-purple"></span>
                                                    <div class="btn-inner-container">
                                                        <i class="fas fa-users"></i>
                                                        <span>Apoio</span>
                                                    </div>
                                                </a>
                                                @include('modal.despachador.despachador_observarunica')

                                                <a class="btn btn-app bg-danger" data-toggle="modal" data-target="#modal-novo-4">
                                                    <div class="btn-inner-container">
                                                        <i class="fas fa-times"></i>
                                                        <span>Abortar</span>
                                                    </div>
                                                </a>
                                                @include('modal.despachador.despachador_observarunica')

                                                <a class="btn btn-app bg-warning" data-toggle="modal" data-target="#modal-novo-5">
                                                    <span class="badge bg-purple"></span>
                                                    <div class="btn-inner-container">
                                                        <i class="fas fa-arrow-up"></i>
                                                        <span>Redirecionar</span>
                                                    </div>
                                                </a>
                                                @include('modal.despachador.despachador_redirecionarocorrencia')

                                                <a class="btn btn-app bg-info" data-toggle="modal" data-target="#modal-novo-5">
                                                    <span class="badge bg-purple"></span>
                                                    <div class="btn-inner-container">
                                                        <i class="fas fa-street-view"></i>
                                                        <span>Empenhar</span>
                                                    </div>
                                                </a>
                                                @include('modal.despachador.despachador_empenhar')








                                                <!-- Adicione aqui outros botões caso necessário -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('content')
<?php
$cadastro190 = App\Models\Cadastro190::all();
?>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
    document.addEventListener("DOMContentLoaded", function() {
        const expandirBtn = document.getElementById("expandir-btn");
        const referenciaTextarea = document.getElementById("referencia-textarea");
        let isExpanded = false;

        expandirBtn.addEventListener("click", function() {
            if (isExpanded) {
                referenciaTextarea.style.height = "100%";
                expandirBtn.innerText = "Expandir";
            } else {
                referenciaTextarea.style.height = "auto";
                expandirBtn.innerText = "Diminuir";
            }
            isExpanded = !isExpanded;
        });
    });
</script>







<!-- Modal Novo 4 -->
<div class="modal fade" id="modal-novo-4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Abortar Ocorrências</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <div>
                        <div>
                            <label for="opcao-1">
                                <input type="radio" id="opcao-1" name="opcao" onclick="handleRadioChange()">
                                TROTE
                            </label>
                        </div>
                        <div>
                            <label for="opcao-2">
                                <input type="radio" id="opcao-2" name="opcao" onclick="handleRadioChange()">
                                CONTATO VIA FONE SOLICITANTE DISPENSA PRESENÇA DE VIATURA NO LOCAL
                            </label>
                        </div>
                        <div>
                            <label for="opcao-3">
                                <input type="radio" id="opcao-3" name="opcao" onclick="handleRadioChange()">
                                ENDEREÇO NÃO LOCALIZADO
                            </label>
                        </div>
                        <div>
                            <label for="opcao-4">
                                <input type="radio" id="opcao-4" name="opcao" onclick="handleRadioChange()">
                                Opção 4
                            </label>
                        </div>
                        <textarea id="texto-editavel" class="form-control" rows="3" oninput="handleTextareaInput()" disabled></textarea>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button id="btn-salvar-observar" type="button" class="btn btn-primary">Abortar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function handleRadioChange() {
                const textarea = document.getElementById('texto-editavel');
                const radios = document.getElementsByName('opcao');

                let selectedOption = null;

                for (const radio of radios) {
                    if (radio.checked) {
                        selectedOption = radio;
                        break;
                    }
                }

                if (selectedOption) {
                    textarea.value = selectedOption.parentElement.textContent.trim();
                    textarea.disabled = false;
                } else {
                    textarea.disabled = false;
                }
            }
        </script>

        @stop

        @section('css')
        <style>
            /* Estilo para reduzir o espaço entre as células */
            #despachos tbody td,
            #viaturas tbody td {
                padding-top: 1px;
                padding-bottom: 1px;
            }

            #despachos thead {
                position: sticky;
                top: 0;
                background-color: white;
            }

            #viaturas thead {
                position: sticky;
                top: 0;
                background-color: white;
            }

            .btn-app {
                font-size: 09px;
                /* Defina o tamanho da fonte desejado */
            }
        </style>
        @stop

        @section('js')
        <!-- Script específico da página -->
        <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <!-- Certifique-se de ter incluído o jQuery e o Bootstrap corretamente -->
        <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                // Ao detectar um duplo clique em uma linha da tabela
                $('tbody').on('dblclick', 'tr', function() {
                    // Obtém os dados da ocorrência da linha clicada
                    var endereco = $(this).find('td:eq(2)').text().trim();
                    var nat = $(this).find('td:eq(3)').text().trim();
                    var opm = $(this).find('td:eq(4)').text().trim();
                    // Você pode adicionar mais variáveis aqui para outros dados da ocorrência, se necessário.

                    // Preenche o modal com os dados da ocorrência
                    $('#modal-detalhes').find('.modal-body input').val(endereco);
                    // Preencha outras partes do modal conforme necessário.

                    // Abre o modal
                    $('#modal-detalhes').modal('show');
                });
            });
        </script>


        <script>
            // Função para formatar o tempo em HH:MM:SS
            function formatarTempo(tempoSegundos) {
                let horas = Math.floor(tempoSegundos / 3600);
                let minutos = Math.floor((tempoSegundos % 3600) / 60);
                let segundos = Math.floor(tempoSegundos % 60);

                // Formatar para sempre exibir 2 dígitos para as horas, minutos e segundos
                horas = horas.toString().padStart(2, '0');
                minutos = minutos.toString().padStart(2, '0');
                segundos = segundos.toString().padStart(2, '0');

                return `${horas}:${minutos}:${segundos}`;
            }



            // Chamar a função para atualizar o tempo decorrido a cada segundo
            setInterval(atualizarTempoDecorrido, 1000);
        </script>


        @stop
