@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">

        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3" style="max-width: 700px;">
            <div class="row">
                <h1 class="title text-center">{{ env('APP_NAMES', "LOGIN") }}</h1>
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
                <form action="{{ route('auth.login.do') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuário</label>
                        <input type="text" name="user" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="insira seu usúario">
                        <div id="emailHelp" class="form-text">Não compartilhe seu usúario e senha com ninguém.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="password" placeholder="insira sua senha" id="exampleInputPassword1">
                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>

                </form>

            </div>

        </div>
    </div>


@endsection
