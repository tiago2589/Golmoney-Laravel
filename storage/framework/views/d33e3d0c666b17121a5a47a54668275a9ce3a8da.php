
<?php $__env->startSection('title', 'PRODUTOS'); ?>
<?php $__env->startSection('content'); ?>


<p>exibindo produto id: <?php echo e($id); ?></p>

<?php if($id != null): ?>
    <p>IMPRIMA</p>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Desenvolvedores GM\Desktop\Golmoney\hdcevents\resources\views/product.blade.php ENDPATH**/ ?>