@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-5"
             style="max-width: 1500px;">
            <div class="row mb-3">
                <h2 class="title text-center">{{ env('APP_NAMEs', "CADASTRO DE OCORRÊNCIA") }}</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="inputSolicitante" class="form-label">Matricula</label>
                    <input type="text" class="form-control" autocomplete="off" value="{{$user->id}}" readonly
                           placeholder="Digite o nome do solicitante" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="inputSolicitante" class="form-label">Usuário</label>
                    <input type="text" class="form-control" autocomplete="off" value="{{$user->name}}" readonly
                           placeholder="Digite o nome do solicitante" required>
                </div>
            </div>
            <div class="row">
                <form action="{{ route('auth.ocorrencia.do') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-8 mb-3">
                            <label for="inputSolicitante" class="form-label">Solicitante</label>
                            <input type="text" name="solicitante" class="form-control" autocomplete="off" id="inputSolicitante"
                                   placeholder="Digite o nome do solicitante" required>
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
                    <div class="row mb-3">
                        <div class="col-md-8 mb-3">
                            <label for="inputNatureza" class="form-label">Natureza da Ocorrência</label>
                            <input type="text" name="natureza" class="form-control" id="inputNatureza"
                                   placeholder="Digite a natureza da ocorrência" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputBatalhao" class="form-label">Batalhão</label>
                            <input type="text" name="batalhao" class="form-control" id="inputBatalhao"
                                   placeholder="Digite o batalhão" maxlength="5" required>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="inputHistorico" class="form-label ">Histórico de Ocorrência</label>
                        <textarea name="historico" class="form-control" id="inputHistorico"
                                  placeholder="Digite o histórico de ocorrência" rows="4" required></textarea>
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
    <script>
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
