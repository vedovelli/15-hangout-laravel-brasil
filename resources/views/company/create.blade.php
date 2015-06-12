@extends('app')

@section('content')
<h2>
    <i class="fa fa-building"></i>
    Criar nova empresa
</h2>

{!! var_dump($profile) !!}

    {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('name', 'Nome da Empresa', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'autofocus' => '']) !!}
        </div>

        <div class="form-group well">
            {!! Form::label('profile', 'Perfil de Usuário', ['class' => 'control-label']) !!}
            {!! Form::select('profile', $profiles, null, ['class' => 'form-control', 'id' => 'profile']) !!}
        </div>

        <button class="btn btn-primary">Salvar</button>

    {!! Form::close() !!}

@stop