<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hangout Laravel - Repositories</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">
	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<style>body{margin-top: 70px;}</style>
</head>
<body class="container">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">Repository Pattern</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! route('profile.index') !!}">Perfis de Usuário</a></li>
        <li><a href="{!! route('user.create') !!}">Usuários</a></li>
        <li><a href="{!! route('company.create') !!}">Empresas</a></li>
    </ul>
</nav>
	@yield('content')
</body>
</html>