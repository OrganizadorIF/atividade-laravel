<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Cadastro de Mangas</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Oficina Laravel</a>
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

    <div class="container form-main-section">
        <h1>Cadastro de Mangas</h1>

        <?php if($errors->any()): ?>
        <div class="errors">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('manga.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group" style="margin-top: 10px;">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo e(old('nome')); ?>">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="autor">Autor</label>
                <input name="autor" id="autor"><?php echo e(old('autor')); ?></input>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="volumes">Volumes</label>
                <input type="text" name="volumes" id="volumes" value="<?php echo e(old('volumes')); ?>">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="ano">Ano</label>
                <input type="text" name="ano" id="ano" value="<?php echo e(old('ano')); ?>">
            </div>
            <button type="submit" style="margin-top: 10px;"">Cadastrar Manga</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\14999727684\manga-shop\resources\views/cadastro.blade.php ENDPATH**/ ?>