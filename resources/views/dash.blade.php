@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="d-flex justify-content-center flex-column border border-black rounded-3 shadow-lg p-3"
             style="max-width: 700px;">
            <div class="row">
                <h1 class="title text-center">BEM-VINDO</h1>
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
                <form id="menuForm" method="POST" action="{{route('dash.do')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputLevel" class="form-label">Selecione o seu nível</label>
                        <select class="form-select" name="level" id="exampleInputLevel" required>
                            <option value="" disabled selected>Escolha uma opção</option>
                            @foreach(\App\Enums\UserLevelEnum::cases() as $key => $value)
                                @if($value->value <= Auth::user()->level)
                                    <option
                                        value="{{$value}}">{{\App\Enums\UserLevelEnum::getDescription($value)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3" id="action">

                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark">Ir para o menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const ramal = ' <label for="exampleInputRamal" class="form-label">RAMAL</label>' +
            '<select class="form-select" name="ramal" id="exampleInputRamal" required>' +
            '<option value="" selected disabled>Selecione o RAMAL</option>' +
            @for($i = 3100; $i <= 3200; $i++)
                '<option value="{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}">{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}</option>' +
            @endfor
                '</select>';

        const bpm = '<label for="exampleInputBatalhao" class="form-label">Batalhão</label>' +
            '<select class="form-select" name="batalhao" id="exampleInputBatalhao" required>' +
            '<option value="" selected disabled>Escolha o Batalhão</option>' +
            @for($i = 1; $i <= 50; $i++)
                '<option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }} º BPM/M </option>' +
            @endfor
                '</select>';

        const supervisor = '<label for="exampleInputCPA" class="form-label">CPA</label>' +
            ' <select class="form-select" name="cpa" id="exampleInputCPA" required>' +
            ' <option value="" selected disabled>Escolha o CPA</option>' +
            @for($i = 1; $i <= 12; $i++)
                '<option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">CPA/M{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>' +
            @endfor
                '</select>';

        document.getElementById('exampleInputLevel').addEventListener('change', function () {

            const level = this.value;
            const action = document.getElementById('action');
            action.innerHTML = '';
            if (level === '{{\App\Enums\UserLevelEnum::User}}') {
                action.innerHTML = ramal;
            } else if (level === '{{\App\Enums\UserLevelEnum::Desp}}') {
                action.innerHTML = bpm;
            } else if (level === '{{\App\Enums\UserLevelEnum::Supervisor}}') {
                action.innerHTML = supervisor;
            }
        });
    </script>
@endsection
