<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>

<!-- Div para BUSCAR e vai preencher a tela toda com 12 colunas -->
<div id="search-containar" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<!-- DIV LISTA DE EVENTOS -->
<div id="event-container" class="col-md-12">
    <h2 class="subtitulo">Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias.</p>
    <!--Div para os cards.  -->
    <div id="cards-container" class="row">
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Div para preencher 4 cards por linha -->
    <div class="card col-md-3">
        <img src="/img/imgcontainer.png" alt="<?php echo e($event->title); ?>">
        <div class="card-body"></div>
        <p class="card-date">05/12/2021</p>
        <h5 class="card-title"><?php echo e($event->title); ?></h5>
        <p class="card-participantes">X Participantes</p>
        <a href="#" class="btn btn-primary">Saber Mais</a>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diversos\ruffs Desenvolvedor\Golmoney\hdcevents\resources\views/welcome.blade.php ENDPATH**/ ?>