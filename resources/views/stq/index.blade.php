@extends('theme.theme')
@section('content')


    <div class="my-5 d-flex justify-content-between align-content-between">
        <h1>Listando Natureza de Ocorrencias</h1>
        <div>
            <a href="{{route('stq.create')}}" class="btn btn-success btn-lg">Novo</a>
        </div>
    </div>

    @if($errors->all())
        @foreach($errors->all() as $error)
            <x-alert color="danger" message="{{ $error }}"/>
        @endforeach
    @endif
    @if(session()->exists('message'))
        <x-alert color="{{ session()->get('color') }}" message="{{ session()->get('message') }}"/>
    @endif
    {{ $dataTable->table() }}
@endsection

@push('js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
