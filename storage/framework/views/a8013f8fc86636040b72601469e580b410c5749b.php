<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>
        
        <h1>TESTE H1</h1>
        <?php if(10 > 15): ?>
            <p><?php echo 'LIMA' ?></p>
        <?php elseif($nome == 'VARIAVEL'): ?><!-- se não, se nome for igual a variavel -->
            <p>O nome é <?php echo e($nome); ?> e tem <?php echo e($idade); ?> de idade e trabalha com <?php echo e($profissao); ?></p>    
        <?php else: ?>                
            <p><?php echo 'RODRIGO' ?></p>
        <?php endif; ?>
        
        <?php for($i = 0; $i < count($arr); $i++): ?>
        <p> <?php echo e($arr [$i]); ?>- <?php echo e($i); ?> </p>
        <?php if($i == 2): ?>
        <p>blz</p>
        <?php endif; ?>
        <?php endfor; ?>

        <?php
    
            $name = "JOAO e MARIA";
            echo $name
        ?>

        <?php $__currentLoopData = $nomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($loop->index); ?> - <?php echo e($nome); ?></p>            
            <p><?php echo e($nome); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Desenvolvedores GM\Desktop\Golmoney\hdcevents\resources\views/welcome.blade.php ENDPATH**/ ?>