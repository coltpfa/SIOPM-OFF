@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">

        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3" style="max-width: 700px;">
            <div class="row">
                <h1 class="title text-center">ALTERAR SENHA</h1>
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
                        <label for="currentPassword" class="form-label">Senha atual</label>
                        <input type="password" name="current_password" class="form-control" id="currentPassword" placeholder="Insira sua senha atual">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Nova senha</label>
                        <input type="password" name="new_password" class="form-control" id="newPassword" placeholder="Insira sua nova senha">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirme a nova senha</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirmPassword" placeholder="Confirme sua nova senha">
                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark">Alterar Senha</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
