@extends('theme.theme')
@section('content')
        <div class="container d-flex justify-content-center mt-5">
    <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3" style="max-width: 700px;">
        <div class="row">
            <h1 class="title text-center">Cadastro de natureza</h1>
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
            <form action="{{ route('stq.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="code" class="form-label">Código</label>
                    <input type="text" name="code" class="form-control" id="code" placeholder="Digite o código da natureza">
                </div>
                <div class="mb-3">
                    <label for="references" class="form-label">Referência</label>
                    <input type="text" name="references" class="form-control" id="references" placeholder="Digite á referencia da natureza">
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-success">Criar</button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
