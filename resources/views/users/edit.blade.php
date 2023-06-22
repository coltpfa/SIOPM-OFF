@extends('welcome')
@section('content')
@extends('menu')

    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3"
             style="max-width: 700px;">
            <div class="row">
                <h1 class="title text-center">Editando Usuário #{{$user->id}}}</h1>
            </div>
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <x-alert color="danger" message="{{ $error }}"/>
                @endforeach
            @endif
            @if(session()->exists('message'))
                <x-alert color="{{ session()->get('color') }}" message="{{ session()->get('message') }}"/>
            @endif
            <div class="row">
                <form action="{{ route('users.update',$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome"
                               value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuário</label>
                        <input type="text" name="user" class="form-control" id="username"
                               placeholder="Digite um nome de usuário" value="{{$user->user}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="password" placeholder="Digite uma senha"
                               id="password">
                    </div>
                    <div class="mb-3">
                        <label for="access-level" class="form-label">Selecione o nível de acesso</label>
                        <select name="level" class="form-control" id="access-level">
                            <option value="1" @php($user->level == 1? 'select' : '')>ATENDENTE</option>
                            <option value="2" @php($user->level == 2? 'select' : '')>DESPACHADOR</option>
                            <option value="3" @php($user->level == 3? 'select' : '')>DESPACHADOR E ATENDENTE</option>
                            <option value="4" @php($user->level == 4? 'select' : '')>SUPERVISOR</option>
                            <option value="5" @php($user->level == 5? 'select' : '')>ADMINISTRADOR</option>
                            <option value="6" @php($user->level == 6? 'select' : '')>CHEFE OPERACIONAL</option>
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
