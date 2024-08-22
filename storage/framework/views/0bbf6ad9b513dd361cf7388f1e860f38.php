<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Listagem de Mangas</title>
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

    <div class="container main-section">
        <h1>Lista de Mangas</h1>

        <?php if(session('success')): ?>
        <div class="success" style="margin-bottom: 20px;">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

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
                <?php $__currentLoopData = $mangas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($manga->id); ?></td>
                    <td><?php echo e($manga->nome); ?></td>
                    <td><?php echo e($manga->autor); ?></td>
                    <td><?php echo e($manga->volumes); ?></td>
                    <td><?php echo e($manga->ano); ?></td>
                    <td>
                        <form action="<?php echo e(route('manga.destroy', $manga->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\14999727684\manga-shop\resources\views/listagem.blade.php ENDPATH**/ ?>