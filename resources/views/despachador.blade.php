@extends('theme.theme')

@section('css')
    <style>
        .bold-text {
            font-weight: bold;
            font-size: 8pt;

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

        /* popup */
        .input-prefixo {
            margin-top: 10px;
            width: 100%;
            padding: 5px;
        }

        .button-container {
            display: flex;
        }

        .clickable-row{
            cursor: pointer;
        }


         body, html {
             height: 100%;
         }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-5"
             style="max-width: 1500px;">
            <div class="row mb-3">
                <h4 class="title text-center">CONTROLE DE OCORRENCIAS</h4>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-3">
                    <label for="inputSolicitante" class="form-label">Serviço</label>
                    <input type="text" class="form-control bold-text" autocomplete="off"
                           value="{{ "Radio Patrulha porem terao diferentes tipos" }}" readonly
                           placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-2">
                    <label for="inputSolicitante" class="form-label">Matricula</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ $user->user }}"
                           readonly required>
                </div>
                <div class="col-12 col-md-3">
                    <label for="inputSolicitante" class="form-label">Controlador</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ $user->name }}"
                           readonly required>
                </div>
                <div class="col-12 col-md-2">
                    <label for="inputHorario" class="form-label">Cabine</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{ $batalhao }}º BPM/M"
                           readonly required>
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
                        <table class="table table-secondary table-hover table-fixed-header">
                            <thead>
                            <tr>
                                <th style="width: 1%;" class="text-center">⚡️</th>
                                <th style="width: 60%;" data-order="endereco">ENDEREÇO</th>
                                <th style="width: 1%;" data-order="nat">NAT</th>
                                <th style="width: 40%;" data-order="opm">OPM</th>
                                <th style="width: 30%;" data-order="espera">ESPERA</th>
                                <th style="width: 1%;" data-order="oco">OCO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($opcoes as $opcao)
                                <tr class="clickable-row {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">
                                    <td class="text-center  {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">{{ $opcao['gravidade'] }}</td>
                                    <td class=" {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">{{ $opcao['endereco'] }}</td>
                                    <td class="text-center  {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">{{ $opcao['nat'] }}</td>
                                    <td class=" {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}" >{{ $opcao['opm'] }}</td>
                                    <td class=" {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">{{ $opcao['espera'] }}</td>
                                    <td class="text-center  {{$opcao['gravidade'] == 'U' ? 'bg-danger' : ''}}">{{ $opcao['oco'] }}</td>
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



                    </head>
                    <body>
                    <div class="container">
                        <div class="btn-group" role="group" aria-label="Botoes">
                            <button type="button" class="btn btn-secondary">Observar todas</button>
                            <button type="button" class="btn btn-secondary">Nova Ocorrência</button>
                            <button type="button" class="btn btn-secondary">Sair</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        // Função para criar um botão
        function createButton(text, id, clickHandler) {
            var button = document.createElement('button');
            button.textContent = text;
            button.setAttribute('id', id);
            button.addEventListener('click', clickHandler);
            return button;
        }

        // Função para exibir o popup de Observar
        function showObservarPopup() {
            // Crie o elemento do popup
            var popup = document.createElement('div');
            popup.classList.add('popup');
            popup.style.backgroundColor = 'white'; // Defina a cor de fundo como branco
            popup.style.color = 'black'; // Defina a cor do texto como preto

// Crie o campo de input para texto aleatório
            var textoInput = document.createElement('textarea');
            textoInput.setAttribute('placeholder', 'Digite um texto aleatório');
            textoInput.style.width = '300px'; // Defina a largura desejada
            textoInput.style.height = '100px'; // Defina a altura desejada

            // Crie as frases prontas com opção de marcação única
            var frasesProntas = [
                'CFP E CGP CIENTE DAS PENDENCIAS',
                'CFP DETERMINOU MANTER OCORRENCIAS PENDENTES',
                'CFP INFORMOU QUE ASSIM QUE TIVER VTR DISPONIVEL EMPENHAR',
                'CFP DETERMINOU AGUARDAR REITERAÇÃO',
                'FALTA DE VIATURA CGP E CFP CIENTE',
                'CGP E CFP CIENTE NADA DETERMINOU'
            ];

            var frasesContainer = document.createElement('div');

            var selectedCheckbox = null;

            frasesProntas.forEach(function (frase) {
                var fraseCheckbox = document.createElement('input');
                fraseCheckbox.setAttribute('type', 'checkbox');
                fraseCheckbox.addEventListener('change', function () {
                    if (fraseCheckbox.checked) {
                        if (selectedCheckbox !== null && selectedCheckbox !== fraseCheckbox) {
                            selectedCheckbox.checked = false;
                        }
                        selectedCheckbox = fraseCheckbox;
                        textoInput.value = frase;
                    } else {
                        selectedCheckbox = null;
                        textoInput.value = '';
                    }
                });

                var fraseLabel = document.createElement('label');
                fraseLabel.textContent = frase;

                var fraseWrapper = document.createElement('div');
                fraseWrapper.appendChild(fraseCheckbox);
                fraseWrapper.appendChild(fraseLabel);

                frasesContainer.appendChild(fraseWrapper);
            });

            // Crie o botão "OBSERVE"
            var observeButton = createButton('OBSERVE', 'observe', function () {
                var texto = textoInput.value;
                if (texto) {
                    console.log('Texto observado:', texto);
                } else {
                    console.log('Nenhum texto foi digitado');
                }
            });

            // Crie o botão de fechar o popup
            var closeButton = createButton('Fechar', 'fecharObservar', function () {
                closePopup(popup);
            });

            // Adicione os elementos ao popup
            popup.appendChild(textoInput);
            popup.appendChild(frasesContainer);
            popup.appendChild(observeButton);
            popup.appendChild(closeButton);

            // Crie o overlay (fundo escuro)
            var overlay = document.createElement('div');
            overlay.classList.add('overlay');
            overlay.addEventListener('click', function () {
                closePopup(popup);
            });

            // Adicione o popup e o overlay ao corpo do documento
            document.body.appendChild(popup);
            document.body.appendChild(overlay);
        }

        // Função para exibir o popup de Abortar
        function showAbortarPopup() {
            // Crie o elemento do popup
            var popup = document.createElement('div');
            popup.classList.add('popup');
            popup.style.backgroundColor = 'white'; // Defina a cor de fundo como branco
            popup.style.color = 'black'; // Defina a cor do texto como preto

            // Crie o campo de input para texto aleatório
            var textoInput = document.createElement('textarea');
            textoInput.setAttribute('placeholder', 'Digite um texto aleatório');
            textoInput.style.width = '100%';
            textoInput.style.height = '100px'; // Defina a altura desejada

            // Crie as frases prontas com opção de marcação única
            var frasesProntas = [
                'TROTE',
                'VIA FONE PARTE DEVIDAMENTE ORIENTADA',
                'NÃO É OCORRENCIA DA POLICIA MILITAR',
                'BLA BLA BLA',
                'NAO VOU ATENDER',
                'QUEM MANDOU MORAR EM LOCAL RUIM KKKK'
            ];

            var frasesContainer = document.createElement('div');

            var selectedCheckbox = null;

            frasesProntas.forEach(function (frase) {
                var fraseCheckbox = document.createElement('input');
                fraseCheckbox.setAttribute('type', 'checkbox');
                fraseCheckbox.addEventListener('change', function () {
                    if (fraseCheckbox.checked) {
                        if (selectedCheckbox !== null && selectedCheckbox !== fraseCheckbox) {
                            selectedCheckbox.checked = false;
                        }
                        selectedCheckbox = fraseCheckbox;
                        textoInput.value = frase;
                    } else {
                        selectedCheckbox = null;
                        textoInput.value = '';
                    }
                });

                var fraseLabel = document.createElement('label');
                fraseLabel.textContent = frase;

                var fraseWrapper = document.createElement('div');
                fraseWrapper.appendChild(fraseCheckbox);
                fraseWrapper.appendChild(fraseLabel);

                frasesContainer.appendChild(fraseWrapper);
            });

            // Crie o botão "OBSERVE"
            var observeButton = createButton('OBSERVE', 'observe', function () {
                var texto = textoInput.value;
                if (texto) {
                    console.log('Texto observado:', texto);
                } else {
                    console.log('Nenhum texto foi digitado');
                }
            });

            // Crie o botão "ABORTAR"
            var abortarButton = createButton('ABORTAR', 'abortar', function () {
                console.log('Ação de abortar');
            });

            // Crie o botão de fechar o popup
            var closeButton = createButton('Fechar', 'fecharAbortar', function () {
                closePopup(popup);
            });

            // Adicione os elementos ao popup
            popup.appendChild(textoInput);
            popup.appendChild(frasesContainer);
            popup.appendChild(observeButton);
            popup.appendChild(abortarButton);
            popup.appendChild(closeButton);

            // Crie o overlay (fundo escuro)
            var overlay = document.createElement('div');
            overlay.classList.add('overlay');
            overlay.addEventListener('click', function () {
                closePopup(popup);
            });

            // Adicione o popup e o overlay ao corpo do documento
            document.body.appendChild(popup);
            document.body.appendChild(overlay);
        }

        // Função para exibir o popup de Redirecionar
        function showRedirecionarPopup() {
            // Crie o elemento do popup
            var popup = document.createElement('div');
            popup.classList.add('popup');
            popup.style.backgroundColor = 'white'; // Defina a cor de fundo como branco
            popup.style.color = 'black'; // Defina a cor do texto como preto
            popup.textContent = 'Popup de Redirecionar';

            // Crie um campo de texto (textarea) para observar ocorrência
            var observarOcorrencia = document.createElement('textarea');
            observarOcorrencia.placeholder = 'Observar Ocorrência';
            observarOcorrencia.style.width = '100%'; // Defina a largura do textarea como 100%
            observarOcorrencia.style.height = '200px'; // Defina a altura do textarea como 200 pixels
            popup.appendChild(observarOcorrencia);

            // Crie um select com uma lista de batalhões disponíveis
            var selectBatalhoes = document.createElement('select');
            var batalhoesDisponiveis = ['01º BPM/M', '02ºBPM/M', '03ºBPM/M', '04ºBPM/M', '05ºBPM/M', '06ºBPM/M', '07ºBPM/M', '08ºBPM/M', '09ºBPM/M', '10ºBPM/M', '11ºBPM/M', '12ºBPM/M', '13ºBPM/M'];
            for (var i = 0; i < batalhoesDisponiveis.length; i++) {
                var option = document.createElement('option');
                option.value = batalhoesDisponiveis[i];
                option.text = batalhoesDisponiveis[i];
                selectBatalhoes.appendChild(option);
            }
            popup.appendChild(selectBatalhoes);

            // Crie o botão "Redirecione"
            var redirecioneButton = createButton('Redirecione', 'redirecione', function () {
                // Lógica para redirecionar com base nas informações selecionadas
                var observacao = observarOcorrencia.value;
                var batalhaoSelecionado = selectBatalhoes.value;
                // Realize as ações necessárias com as informações fornecidas
                console.log('Observação:', observacao);
                console.log('Batalhão selecionado:', batalhaoSelecionado);
                // Feche o popup
                closePopup(popup);
            });

            // Adicione o botão "Redirecione" ao popup
            popup.appendChild(redirecioneButton);

            // Crie o botão de fechar o popup
            var closeButton = createButton('Fechar', 'fecharRedirecionar', function () {
                closePopup(popup);
            });

            // Adicione o botão ao popup
            popup.appendChild(closeButton);

            // Crie o overlay (fundo escuro)
            var overlay = document.createElement('div');
            overlay.classList.add('overlay');
            overlay.addEventListener('click', function () {
                closePopup(popup);
            });

            // Adicione o popup e o overlay ao corpo do documento
            document.body.appendChild(popup);
            document.body.appendChild(overlay);
        }

        // Manipulador de clique genérico para os botões
        function handleButtonClick(event) {
            var buttonId = event.target.id;
            switch (buttonId) {
                case 'observar':
                    // Chame a função para exibir o popup de Observar
                    showObservarPopup();
                    break;
                case 'abortar':
                    // Chame a função para exibir o popup de Abortar
                    showAbortarPopup();
                    break;

                case 'redirecionar':
                    // Chame a função para exibir o popup de Redirecionar
                    showRedirecionarPopup();
                    break;
                case 'fechar':
                    // Lógica para o botão "Fechar"
                    console.log('Botão "Fechar" clicado');
                    var popup = document.querySelector('.popup');
                    if (popup) {
                        closePopup(popup);
                    }
                    break;
                default:
                    break;
            }
        }

        // Função para fechar o popup
        function closePopup(popup) {
            var overlay = document.querySelector('.overlay');
            if (popup && overlay) {
                popup.remove();
                overlay.remove();
            }
        }

        // Função para adicionar evento de clique em cada linha da tabela
        function addClickEventToRows() {
            var rows = document.querySelectorAll('.table-fixed-header tbody tr');
            rows.forEach(function (row) {
                row.addEventListener('click', function () {
                    var gravidade = row.querySelector('td:nth-child(1)').textContent;
                    var endereco = row.querySelector('td:nth-child(2)').textContent;
                    var nat = row.querySelector('td:nth-child(3)').textContent;
                    var opm = row.querySelector('td:nth-child(4)').textContent;
                    var espera = row.querySelector('td:nth-child(5)').textContent;
                    var oco = row.querySelector('td:nth-child(6)').textContent;

                    showPopup(gravidade, endereco, nat, opm, espera, oco);
                });
            });
        }

        // Chame a função para adicionar o evento de clique após a tabela ser carregada
        window.addEventListener('DOMContentLoaded', function () {
            addClickEventToRows();
        });

        // Função para exibir o popup com os dados
        function showPopup(gravidade, endereco, nat, opm, espera, oco) {
            // Crie o elemento do popup
            var popup = document.createElement('div');
            popup.classList.add('popup');
            popup.style.backgroundColor = 'white'; // Defina a cor de fundo como branco
            popup.style.color = 'black'; // Defina a cor do texto como preto

            // Crie os elementos para exibir os dados
            var gravidadeElement = document.createElement('p');
            gravidadeElement.textContent = 'Gravidade: ' + gravidade;
            var enderecoElement = document.createElement('p');
            enderecoElement.textContent = 'Endereço: ' + endereco;
            var natElement = document.createElement('p');
            natElement.textContent = 'NAT: ' + nat;
            var opmElement = document.createElement('p');
            opmElement.textContent = 'OPM: ' + opm;
            var esperaElement = document.createElement('p');
            esperaElement.textContent = 'Espera: ' + espera;
            var ocoElement = document.createElement('p');
            ocoElement.textContent = 'OCO: ' + oco;

            // Crie o campo de input "Prefixo"
            var prefixoLabel = document.createElement('label');
            prefixoLabel.textContent = 'Prefixo:';
            var prefixoInput = document.createElement('input');
            prefixoInput.setAttribute('type', 'text');

            // Crie os botões
            var observarButton = createButton('Observar', 'observar', handleButtonClick);
            var abortarButton = createButton('Abortar', 'abortar', handleButtonClick);
            var redirecionarButton = createButton('Redirecionar', 'redirecionar', handleButtonClick);
            var closeButton = createButton('Fechar', 'fechar', handleButtonClick);

            // Adicione os elementos ao popup
            popup.appendChild(gravidadeElement);
            popup.appendChild(enderecoElement);
            popup.appendChild(natElement);
            popup.appendChild(opmElement);
            popup.appendChild(esperaElement);
            popup.appendChild(ocoElement);
            popup.appendChild(prefixoLabel);
            popup.appendChild(prefixoInput);
            popup.appendChild(observarButton);
            popup.appendChild(abortarButton);
            popup.appendChild(redirecionarButton);
            popup.appendChild(closeButton);

            // Crie o overlay (fundo escuro)
            var overlay = document.createElement('div');
            overlay.classList.add('overlay');
            overlay.addEventListener('click', function () {
                closePopup(popup);
            });

            // Adicione o popup e o overlay ao corpo do documento
            document.body.appendChild(popup);
            document.body.appendChild(overlay);
        }


    </script>
@endpush
