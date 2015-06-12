@extends('app')

@section('content')
<h2>
    <i class="fa fa-user"></i>
    Criar novo usuário
</h2>

        {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('name', 'Nome do Usuário', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'autofocus' => '']) !!}
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!}
                    {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) !!}
                </div>
            </div>
        </div>

        <div class="form-group well">
            {!! Form::label('profile', 'Perfil de Usuário', ['class' => 'control-label']) !!}
            {!! Form::select('profile', $profiles, null, ['class' => 'form-control', 'id' => 'profile']) !!}
        </div>

        <button class="btn btn-success">Salvar</button>

    {!! Form::close() !!}
@stop