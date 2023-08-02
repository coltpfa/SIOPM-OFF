@extends('welcome');
@extends('menu')
@section('content')


    <div class="my-5 d-flex justify-content-between align-content-between">
        <h1>Listando Usuários</h1>
        <div>
            <a href="{{route('users.cadastro')}}" class="btn btn-success btn-lg">Novo</a>
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
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Usuário</th>
            <th scope="col">Nível</th>
            <th scope="col">Criador</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($users))
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->user}}</td>
                    <td>{{$user->level_string}}</td>
                    <td>{{$user->userCreated()->user ?? ""}}</td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Editar</a>
                        <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')
    <script>
        let table = new DataTable('#myTable');
    </script>
@endpush
