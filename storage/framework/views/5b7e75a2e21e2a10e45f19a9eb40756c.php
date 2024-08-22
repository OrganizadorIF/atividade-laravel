<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Página Inicial</title>
</head>

<body>

    <nav class="navbar">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">MangaShop</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listagem')); ?>">Listagem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('manga.create')); ?>">Cadastro</a>
            </li>
        </ul>
    </nav>

    <div class="container home-main-section">
        <h1 class="main-title">MangaShop</h1>
        <h2>
            Atividade referente à oficina de Laravel da disciplina de Tecnologias Web, ministrada pelos alunos: Vinicius, Elias e João.
        </h2>
    </div>

</body>
</html><?php /**PATH C:\Users\14999727684\manga-shop\resources\views/home.blade.php ENDPATH**/ ?>