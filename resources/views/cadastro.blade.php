<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Cadastro de Mangas</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">Oficina Laravel</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('listagem') }}">Listagem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manga.create') }}">Cadastro</a>
            </li>
        </ul>
    </nav>

    <div class="container form-main-section">
        <h1>Cadastro de Mangas</h1>

        @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('manga.store') }}" method="post">
            @csrf
            <div class="form-group" style="margin-top: 10px;">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="autor">Autor</label>
                <input name="autor" id="autor">{{ old('autor') }}</input>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="volumes">Volumes</label>
                <input type="text" name="volumes" id="volumes" value="{{ old('volumes') }}">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="ano">Ano</label>
                <input type="text" name="ano" id="ano" value="{{ old('ano') }}">
            </div>
            <button type="submit" style="margin-top: 10px;"">Cadastrar Manga</button>
        </form>
    </div>
</body>
</html>