@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3" style="max-width: 700px;">
            <div class="row">
                <h1 class="title text-center">{{ env('APP_NAMES', "BEM-VINDO") }}</h1>
            </div>
            <div class="row">
                <form action="{{ route('auth.login.do') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputLevel" class="form-label">Selecione o seu nível</label>
                        <select class="form-select" name="level" id="exampleInputLevel" required>
                            <option value="" disabled selected>Escolha uma opção</option>
                            <option value="despachador">Despachador</option>
                            <option value="atendente">Atendente</option>
                            <option value="despachador_atendente">Despachador e Atendente</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="administrador">Administrador</option>
                            <option value="chefe_operacional">Chefe Operacional</option>
                        </select>
                    </div>
                    <div class="mb-3" id="ramalContainer" style="display: none;">
                        <label for="exampleInputRamal" class="form-label">RAMAL</label>
                        <select class="form-select" name="ramal" id="exampleInputRamal">
                            <option value="">Selecione o RAMAL</option>
                            @for($i = 3100; $i <= 3200; $i++)
                                <option value="{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}">{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3" id="batalhaoContainer" style="display: none;">
                        <label for="exampleInputBatalhao" class="form-label">Batalhão</label>
                        <select class="form-select" name="batalhao" id="exampleInputBatalhao">
                            <option value="">Escolha o Batalhão</option>
                            @for($i = 1; $i <= 50; $i++)
                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}º BPM/M">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}º BPM/M</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3" id="cpaContainer" style="display: none;">
                        <label for="exampleInputCPA" class="form-label">CPA</label>
                        <select class="form-select" name="cpa" id="exampleInputCPA">
                            <option value="">Escolha o CPA</option>
                            @for($i = 1; $i <= 12; $i++)
                                <option value="CPA/M{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">CPA/M{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark">Ir para o menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('exampleInputLevel').addEventListener('change', function() {
            var level = this.value;
            var ramalContainer = document.getElementById('ramalContainer');
            var batalhaoContainer = document.getElementById('batalhaoContainer');
            var cpaContainer = document.getElementById('cpaContainer');
            ramalContainer.style.display = 'none';
            batalhaoContainer.style.display = 'none';
            cpaContainer.style.display = 'none';

            if (level === 'atendente') {
                ramalContainer.style.display = 'block';
            } else if (level === 'despachador') {
                batalhaoContainer.style.display = 'block';
            } else if (level === 'supervisor') {
                cpaContainer.style.display = 'block';
            }
        });
    </script>
@endsection
