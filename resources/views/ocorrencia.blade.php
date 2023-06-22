@extends('welcome')
@extends('menu')
@section('content')
    <style>
        .bold-text {
            font-weight: bold;
        }
    </style>
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-5" style="max-width: 1500px;">
            <div class="row mb-3">
                <h2 class="title text-center">{{ env('APP_NAMEs', "CADASTRO DE OCORRÊNCIA") }}</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="inputSolicitante" class="form-label ">Matricula</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{$user->user}}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="inputSolicitante" class="form-label">Usuário</label>
                    <input type="text" class="form-control bold-text" autocomplete="off" value="{{$user->name}}" readonly placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-4">
                    <label for="inputHorario" class="form-label">Horas:</label>
                    <span id="horarioAtual" class="form-control bold-text" readonly>{{ date('H:i:s') }}</span>
                </div>
            </div>





            <div class="row">
                <form action="{{ route('auth.login.do') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-8 mb-3">
                            <label for="inputSolicitante" class="form-label">Solicitante</label>
                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkboxAnonimo">
                                    <label class="form-check-label" for="checkboxAnonimo">Anônimo </label>
                                </div>
                                <input type="text" name="solicitante" class="form-control" autocomplete="off" id="inputSolicitante" placeholder="Digite o nome do solicitante" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputTelefone" class="form-label">Telefone</label>
                            <input type="tel" name="telefone" class="form-control" autocomplete="off" id="inputTelefone"
                                   placeholder="Digite o telefone" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control" autocomplete="off" id="inputCidade"
                               placeholder="Digite a cidade" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label for="inputEndereco" class="form-label">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="inputEndereco"
                                   placeholder="Digite o endereço" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="inputNumero" class="form-label">Número</label>
                            <input type="text" name="numero" class="form-control" id="inputNumero"
                                   placeholder="Digite Número" maxlength="6" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="inputComplemento" class="form-label">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="inputComplemento"
                                   placeholder="Complemento">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label for="inputBairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="inputBairro"
                                   placeholder="Digite o bairro" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputReferencia" class="form-label">Referência</label>
                            <input type="text" name="referencia" class="form-control" id="inputReferencia"
                                   placeholder="Digite uma referência" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2 mb-2">
                            <label for="inputBatalhao" class="form-label">BPM/M</label>
                            <input type="text" name="batalhao" class="form-control" id="inputBatalhao"
                                   placeholder="Batalhão" maxlength="5" required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="inputCompanhia" class="form-label">CIA</label>
                            <input type="text" name="companhia" class="form-control" id="inputCompanhia"
                                   placeholder="Companhia" required>
                        </div>
                        <div class="col-md-8 mb-4">
                            <label for="inputNatureza" class="form-label">Natureza da Ocorrência</label>
                            <input type="text" name="natureza" class="form-control" id="inputNatureza" placeholder="Digite a natureza da ocorrência" required>
                        </div>

                    </div>




                    <!-- Marque Box -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkPolicial">
                        <label class="form-check-label" for="checkPolicial">POLICIAL EM PERIGO</label>
                    </div>
                    <br>
                    <div id="mensagem" class="bg-danger text-white font-weight-bold text-center" style="display: none;">
                        ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️
                    </div>


                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark">Finalizar Cadastro de Ocorrência</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>
    <script>

        // CHECK ANONIMO
        const checkboxAnonimo = document.getElementById('checkboxAnonimo');
        const inputSolicitante = document.getElementById('inputSolicitante');

        checkboxAnonimo.addEventListener('change', function() {
            if (checkboxAnonimo.checked) {
                inputSolicitante.value = 'Anônimo';
                inputSolicitante.disabled = true;
            } else {
                inputSolicitante.value = '';
                inputSolicitante.disabled = false;
            }
        });


        // HORAS
        setInterval(function() {
            var horarioAtual = new Date().toLocaleTimeString();
            document.getElementById('horarioAtual').textContent = horarioAtual;
        }, 1000);

        // NATUREZA DA OCORRENCIA
        const estados = [
            { value: 'A01', label: 'A01 - HOMICÍDIO CULPOSO' },
            { value: 'A02', label: 'A02 - HOMICÍDIO DOLOSO' },
            { value: 'A03', label: 'A03 - HOMICÍDIO TENTATIVA' },
            { value: 'A04', label: 'A04 - ABORTO' },
            { value: 'A05', label: 'A05 - AGRESSÃO' },
            { value: 'A06', label: 'A06 - INFANTICÍDIO' },
            { value: 'A07', label: 'A07 - PERICLITAÇÃO DE VIDA' },
            { value: 'A08', label: 'A08 - ABANDONO' },
            { value: 'A09', label: 'A09 - OMISSÃO DE SOCORRO' },
            { value: 'A10', label: 'A10 - AMEAÇA' },
            { value: 'A11', label: 'A11 - SEQUESTO E CÁRCERE PRIVADO' },
            { value: 'A12', label: 'A12 - VIOLAÇÃO DE DOMICÍLIO' },
            { value: 'A13', label: 'A13 - MAUS TRATOS À PESSOA' },
            { value: 'A14', label: 'A14 - RIXA' },
            { value: 'A15', label: 'A15 - CALÚNIA' },
            { value: 'A16', label: 'A16 - DIFAMAÇÃO' },
            { value: 'A17', label: 'A17 - INJÚRIA' },
            { value: 'A19', label: 'A19 - RACISMO' },
            { value: 'A20', label: 'A20 - PEDIDO DE SOCORRO' },
            { value: 'A21', label: 'A21 - ENCONTRO DE CADÁVER' },
            { value: 'A22', label: 'A22 - SUICÍDIO' },
            { value: 'A23', label: 'A23 - TENTATIVA DE SUICÍDIO' },
            { value: 'A24', label: 'A24 - AFOGAMENTO EM CURSO' },
            { value: 'A25', label: 'A25 - TORTURA' },
            { value: 'A26', label: 'A26 - ABANDONO MATERIAL' },
            { value: 'A27', label: 'A27 - ABANDONO INTELECTUAL' },
            { value: 'A28', label: 'A28 - ENTREGA DE FILHO MENOR À PESSOA INIDÔNIA' },
            { value: 'A28', label: 'A30 - LESÃO CORPORAL/ AGRESSÃO CULPOSA' },
            { value: 'A31', label: 'A31 - MORTE DE PESSOA' },
            { value: 'A32', label: 'A32 - CONDUTAS DISCRIMINATÓRIAS' },
            { value: 'B01', label: 'B01 - FURTO' },
            { value: 'B02', label: 'B02 - FURTO TENTATIVA' },
            { value: 'B03', label: 'B03 - ROUBO TENTATIVA' },
            { value: 'B04', label: 'B04 - ROUBO' },
            { value: 'B05', label: 'B05 - EXTORSÃO' },
            { value: 'B06', label: 'B06 - POSSE/INVASÃO DE PROPRIEDADE' },
            { value: 'B07', label: 'B07 - DANO MATERIAL' },
            { value: 'B08', label: 'B08 - APROPRIAÇÃO INDÉBITA' },
            { value: 'B09', label: 'B09 - ESTELIONATO FRAUDE' },
            { value: 'B10', label: 'B10 - RECEPTAÇÃO' },
            { value: 'B11', label: 'B11 - LATROCÍNIO' },
            { value: 'B12', label: 'B12 - ALARME DISPARADO' },
            { value: 'C01', label: 'C01 - PERTURBAÇÃO DO SOSSEGO' },
            { value: 'C02', label: 'C02 - CONDUTA INCONVENIENTE' },
            { value: 'C03', label: 'C03 - EMBRIAGUEZ' },
            { value: 'C04', label: 'C04 - DESINTELIGÊNCIA' },
            { value: 'C05', label: 'C05 - AVERIGUAÇÃO DE ATITUDE SUSPEITA' },
            { value: 'C06', label: 'C06 - PERTURBAÇÃO DE CERIMÔNIA FUNERÁRIA' },
            { value: 'C07', label: 'C07 - VIOLAÇÃO DE SEPULTURA' },
            { value: 'C08', label: 'C08 - DESTR/SUBTR/OCULT DE CADÁVER' },
            { value: 'C09', label: 'C09 - VILIPÊNDIO DE CADÁVER' },
            { value: 'C99', label: 'C99 - PANCADÃO/ FUNK/ESQUENTA' },
            { value: 'D01', label: 'D01 – ESTUPRO' },
            { value: 'D02', label: 'D02 - ESTUPRO TENTATIVA' },
            { value: 'D03', label: 'D03 - ATO OBSCENO' },
            { value: 'D04', label: 'D04 - ESCRITO OU OBJ. OBSCENO' },
            { value: 'D05', label: 'D05 - ATENTADO VIOLENTO AO PUDOR' },
            { value: 'D06', label: 'D06 - CORRUPÇÃO DE MENORES' },
            { value: 'D07', label: 'D07 - RAPTO' },
            { value: 'D08', label: 'D08 - EXPLORAÇÃO DO LENOCÍNIO' },
            { value: 'D09', label: 'D09 - JOGOS DE AZAR' },
            { value: 'D12', label: 'D12 - SERVIR BEBIDA ALCÓOLICA A INCAPAZ' },
            { value: 'D13', label: 'D13 - IMPORTUNAÇÃO SEXUAL' },
            { value: 'E01', label: 'E01 - PECULATO' },
            { value: 'E02', label: 'E02 - CONCUSSÃO' },
            { value: 'E03', label: 'E03 - CORRUPÇÃO' },
            { value: 'E04', label: 'E04 - PREVARICAÇÃO' },
            { value: 'E05', label: 'E05 - VIOLÊNCIA ARBITRÁRIA' },
            { value: 'E06', label: 'E06 - USURPAÇÃO DE FUNÇÃO PÚBLICA' },
            { value: 'E07', label: 'E07 - APOIO A ÓRGÃOS EXTERNOS' },
            { value: 'E08', label: 'E08 - DESOBEDIÊNCIA' },
            { value: 'E09', label: 'E09 - DESACATO' },
            { value: 'E10', label: 'E10 - CONTRABANDO/ DESCAMINHO' },
            { value: 'E11', label: 'E11 - ABUSO DE AUTORIDADE' },
            { value: 'E13', label: 'E13 - RESISTÊNCIA' },
            { value: 'F01', label: 'F01 - OCORRÊNCIA COM ENTORPECENTE' },
            { value: 'G01', label: 'G01 - OCORRÊNCIA COM PRESO' },
            { value: 'G02', label: 'G02 - COMUNICAÇÃO FALSA DE CRIME/TROTE' },
            { value: 'H01', label: 'H01 - GREVE' },
            { value: 'H02', label: 'H02 - PIQUETE' },
            { value: 'H03', label: 'H03 - TUMULTO' },
            { value: 'H04', label: 'H04 - PASSEATA' },
            { value: 'H05', label: 'H05 - SAQUE/ARRASTÃO' },
            { value: 'H06', label: 'H06 - MANIFESTAÇÃO PÚBLICA' },
            { value: 'I02', label: 'I02 - OCORRÊNCIA AMBIENTAL GCM' },
            { value: 'I99', label: 'I99 - OUTRAS OCR AMBIENTAIS GCM' },
            { value: 'J01', label: 'J01 - EXERCÍCIO ILEGAL DE PROFISSÃO/ ATIVIDADE' },
            { value: 'J02', label: 'J02 - EVENENAMENTO DE ÁGUA POTÁVEL' },
            { value: 'J03', label: 'J03 - DETENÇÃO DE SUSPEITO' },
            { value: 'J04', label: 'J04 - SUBVERSÃO /TERRORISMO' },
            { value: 'J05', label: 'J05 - CRIME CONTRA A ECONOMIA POPULAR' },
            { value: 'J06', label: 'J06 - FALSA IDENTIDADE' },
            { value: 'J07', label: 'J07 - USO DE DOCUMENTO FALSO' },
            { value: 'J08', label: 'J08 - FALSIDADE IDEOLÓGICA' },
            { value: 'J09', label: 'J09 - ARMA DE FOGO (DISP.ACIDENTAL/INTEN./PORTE ILEGA' },
            { value: 'J10', label: 'J10 - OCORRÊNCIA DE FALSIFICAÇÃO' },
            { value: 'J11', label: 'J11 - ASSOCIAÇÃO CRIMINOSA' },
            { value: 'J12', label: 'J12 - SOLTURA DE BALÕES/ FOGOS' },

        ];

        const customOptions = {
            includeMatches: true,
            threshold: 0.2,
            keys: ['label']
        };
        const fuse = new Fuse(estados, customOptions);

        const similarWords = {
            'SOM ALTO': 'C01 - PERTURBAÇÃO DO SOSSEGO',
            'BRIGA': 'C04 - DESINTELIGENCIA',
            'DISCUSSÃO': 'C04 - DESINTELIGENCIA',
            // Adicione aqui outras palavras e seus respectivos códigos desejados
        };

        function autocomplete(input, array) {
            var currentFocus;

            input.addEventListener("input", function(e) {
                var val = this.value.toUpperCase();
                closeAllLists();
                if (!val) { return false; }

                var divContainer = document.createElement("DIV");
                divContainer.setAttribute("id", this.id + "List");
                divContainer.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(divContainer);

                for (var i = 0; i < estados.length; i++) {
                    var item = estados[i];
                    var label = item.label.toUpperCase();
                    if (label.includes(val)) {
                        var divItem = document.createElement("DIV");
                        divItem.innerHTML = "<strong>" + label.substr(0, val.length) + "</strong>";
                        divItem.innerHTML += label.substr(val.length);
                        divItem.innerHTML += "<input type='hidden' value='" + item.label + "'>";
                        divItem.addEventListener("click", function(e) {
                            input.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                        });
                        divContainer.appendChild(divItem);
                    }
                }

                for (var word in similarWords) {
                    var similarWord = word.toUpperCase();
                    if (similarWord.includes(val)) {
                        var divItem = document.createElement("DIV");
                        divItem.innerHTML = "<strong>" + similarWord.substr(0, val.length) + "</strong>";
                        divItem.innerHTML += similarWord.substr(val.length);
                        divItem.innerHTML += "<input type='hidden' value='" + similarWords[word] + "'>";
                        divItem.addEventListener("click", function(e) {
                            input.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                        });
                        divContainer.appendChild(divItem);
                    }
                }
            });

            input.addEventListener("keydown", function(e) {
                var divList = document.getElementById(this.id + "List");
                if (divList) {
                    divList = divList.getElementsByTagName("div");
                }
                if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(divList);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(divList);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (divList) divList[currentFocus].click();
                    }
                }
            });

            function addActive(divList) {
                if (!divList) return false;
                removeActive(divList);
                if (currentFocus >= divList.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = divList.length - 1;
                divList[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(divList) {
                for (var i = 0; i < divList.length; i++) {
                    divList[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists() {
                var divList = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < divList.length; i++) {
                    divList[i].parentNode.removeChild(divList[i]);
                }
            }

            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        var inputNatureza = document.getElementById("inputNatureza");
        autocomplete(inputNatureza, estados);






        const checkbox = document.getElementById('checkPolicial');
        const mensagem = document.getElementById('mensagem');

        checkbox.addEventListener('change', function () {
            if (this.checked) {
                mensagem.style.display = 'block';
                mensagem.innerText = '⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️';
                mensagem.classList.add('bg-danger'); // Adiciona a classe bg-danger
            } else {
                mensagem.style.display = 'none';
                mensagem.innerText = '';
                mensagem.classList.remove('bg-danger'); // Remove a classe bg-danger
            }
        });

    </script>
@endsection
