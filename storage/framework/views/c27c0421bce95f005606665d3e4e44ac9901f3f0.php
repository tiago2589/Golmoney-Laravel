

<?php $__env->startSection('title', $event->title); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <!-- class="img-fluid" significa deixar a imagem responsiva, aumenta e diminui conforme o tamanho da tela -->
            <img src="/img/events/<?php echo e($event->image); ?>" class="img-fluid" alt=" <?php echo e($event->title); ?>" >
        </div>
        <div id="info-container" class="col-md-6"> <!-- DIV INFO CONTAINER -->
            <h1><?php echo e($event->title); ?></h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>  <?php echo e($event->city); ?> </p>
            <p class="events-participantes"><ion-icon name="people-outline"></ion-icon>  X Participantes</p>
            <p class="events-owner"><ion-icon name="star-outline"></ion-icon>  Dono do Evento</p>
            <a href="#" class="btn btn-primary" id="event-submit"> Confirmar Presença</a> <!-- BOTAO CONFIRMAR PRESENÇA -->
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento::</h3>
            <p class="event-description"><?php echo e($event->description); ?></p>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Desenvolvedores GM\Desktop\Golmoney\hdcevents\resources\views/events/show.blade.php ENDPATH**/ ?>