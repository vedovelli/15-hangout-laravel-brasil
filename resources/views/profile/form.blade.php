@extends('app')

@section('content')

    <h2>
        <i class="fa fa-group"></i>
        Gerenciar Perfil de Usuário
        @if(!is_null($profile))
        <small>{!! $profile->name !!}</small>
        @endif
    </h2>

    @if(!is_null($profile))
        {!! Form::model($profile, ['route' => ['profile.update', $profile->id]]) !!}
    @else
        {!! Form::open(['route' => 'profile.store']) !!}
    @endif

    <div class="form-group">
        {!! Form::label('name', 'Nome do Perfil', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'autofocus' => '']) !!}
    </div>

    <button class="btn btn-primary">
        <i class="fa fa-save"></i> Salvar
    </button>

    {!! Form::close() !!}

@stop