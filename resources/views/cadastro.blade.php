@extends('welcome')
@section('content')

        <div class="container d-flex justify-content-center mt-5">
    <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3" style="max-width: 700px;">
        <div class="row">
            <h1 class="title text-center">{{ env('APP_NAMEs', "Cadastro de Usuário") }}</h1>
        </div>
        <div class="row">
            <form action="{{ route('auth.cadastro.do') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Digite um nome de usuário">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Digite uma senha" id="password">
                </div>
                <div class="mb-3">
                    <label for="access-level" class="form-label">Selecione o nível de acesso</label>
                    <select name="access_level" class="form-control" id="access-level">
                        <option value="1">CHEFE OPERACIONAL</option>
                        <option value="2">ADMINISTRADOR</option>
                        <option value="3">SUPERVISOR</option>
                        <option value="4">DESPACHADOR E ATENDENTE</option>
                        <option value="5">DESPACHADOR</option>
                        <option value="6">ATENDENTE</option>
                    </select>
                </div>

                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-dark">Criar Usuário</button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
