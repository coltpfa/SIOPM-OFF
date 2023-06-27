@extends('theme.theme')
@section('content')
    <style>
        .bold-text {
            font-weight: bold;font-size: 8pt;

        }
        table.table-secondary tbody td {
            line-height: 0.1;
        }

        /* titulo da tabela */
        .table-fixed-header thead {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        table.table-secondary {
            font-size: 8pt; /* Defina o tamanho da fonte desejado */
        }

        table.table-bordered {
            border-collapse: collapse;
        }

        table.table-bordered th,
        table.table-bordered td {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        table.table-bordered th:first-child,
        table.table-bordered td:first-child {
            border-left: 1px solid black;
        }

        table.table-bordered th:last-child,
        table.table-bordered td:last-child {
            border-right: 1px solid black;
        }




    </style>
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-5" style="max-width: 1500px;">
            <div class="row mb-3">
                <h2 class="title text-center">CONTROLE DE OCORRENCIAS</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="inputSolicitante" class="form-label">Serviço</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ "Radio Patrulha" }}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-2">
                    <label for="inputSolicitante" class="form-label">Matricula</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ "150845-0" }}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-3">
                    <label for="inputSolicitante" class="form-label">Controlador</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ "SD-PM MIKE" }}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-2">
                    <label for="inputHorario" class="form-label">Cabine</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ "28ºBPM/M" }}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-2">
                    <label for="inputHorario" class="form-label">Horas:</label>
                    <span id="horarioAtual" class="form-control bold-text" readonly>{{ date('H:i:s') }}</span>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-2">
                    <h6 class="title text-center">US</h6>
                    <div class="table-responsive" style="max-height: 400px; max-width: 100%;">
                        <table class="table table-secondary table-striped-columns table-hover table-fixed-header">
                        <thead>
                        <tr>
                            <th style="width: 5%;">Viatura</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>28100</td>
                        </tr>
                        <tr>
                            <td>28250</td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>

                    <div class="col-12 col-md-10">
                        <h6 class="title text-center">Ocorrências Pendentes</h6>
                        <div class="table-responsive" style="max-height: 400px; max-width: 100%;">
                            <table class="table table-secondary table-striped-columns table-hover table-fixed-header">
                            <thead>
                            <tr>
                                <th style="width: 1%;" class="text-center">⚡️</th>
                                <th style="width: 60%;">ENDEREÇO</th>
                                <th style="width: 1%;">NAT</th>
                                <th style="width: 40%;">OPM</th>
                                <th style="width: 30%;">ESPERA</th>
                                <th style="width: 1%;">OCO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $opcoes = [
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA JOAQUIM,525',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:15:16',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'U',
                                        'endereco' => 'RUA MENESES DE SOUSA, 1202',
                                        'nat' => 'A98',
                                        'opm' => '3ª CIA 10ºBPM/M',
                                        'espera' => '00:10:11',
                                        'oco' => '15478',
                                    ],
                                    [
                                        'gravidade' => 'N',
                                        'endereco' => 'RUA RIBEIRO DE LIMA, 158',
                                        'nat' => 'C01',
                                        'opm' => '3ª CIA 07ºBPM/M',
                                        'espera' => '00:24:12',
                                        'oco' => '15478',
                                    ],


                                ];
                            @endphp

                            @foreach ($opcoes as $opcao)
                                <tr>
                                    <td class="text-center">{{ $opcao['gravidade'] }}</td>
                                    <td>{{ $opcao['endereco'] }}</td>
                                    <td class="text-center">{{ $opcao['nat'] }}</td>
                                    <td>{{ $opcao['opm'] }}</td>
                                    <td>{{ $opcao['espera'] }}</td>
                                    <td class="text-center">{{ $opcao['oco'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <form action="{{ route('auth.login.do') }}" method="POST" autocomplete="off">
                    @csrf
                    <!-- Botões e popups -->
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">OBSERVAR</button>
                            <button class="btn btn-secondary" type="button">NOVA OCORRÊNCIA</button>
                            <button class="btn btn-danger" type="button">SAIR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
