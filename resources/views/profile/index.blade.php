@extends('app')

@section('content')
<h2>
    <i class="fa fa-group"></i>
    Perfis de Usuário
    <small><a href="{!! route('profile.create') !!}">
        <i class="fa fa-plus"></i> novo perfil
    </a></small>
</h2>

@include('partials.alerts')

@if(count($profiles) > 0)
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Nome do Perfil</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{!! $profile->name !!}</td>
            <td width="1%" nowrap>
                <a href="{!! route('profile.edit', $profile->id) !!}" class="btn btn-primary btn-xs">
                    <i class="fa fa-fw fa-pencil"></i> editar
                </a>
                <a href="{!! route('profile.destroy', $profile->id) !!}" class="btn btn-danger btn-xs">
                    <i class="fa fa-fw fa-remove"></i> remover
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h5 class="well">Nenhum perfil ainda cadastrado.</h5>
@endif
@stop