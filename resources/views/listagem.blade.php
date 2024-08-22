<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Listagem de Mangas</title>
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

    <div class="container main-section">
        <h1>Lista de Mangas</h1>

        @if (session('success'))
        <div class="success" style="margin-bottom: 20px;">
            {{ session('success') }}
        </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th style="padding-bottom: 10px;">ID</th>
                    <th style="padding-bottom: 10px;">Nome</th>
                    <th style="padding-bottom: 10px;">Autor</th>
                    <th style="padding-bottom: 10px;">Volumes</th>
                    <th style="padding-bottom: 10px;">Ano</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                @foreach ($mangas as $manga)
                <tr>
                    <td>{{ $manga->id }}</td>
                    <td>{{ $manga->nome }}</td>
                    <td>{{ $manga->autor }}</td>
                    <td>{{ $manga->volumes }}</td>
                    <td>{{ $manga->ano }}</td>
                    <td>
                        <form action="{{ route('manga.destroy', $manga->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>