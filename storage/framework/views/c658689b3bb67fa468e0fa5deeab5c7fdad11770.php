

<?php $__env->startSection('title', 'Criar Evento'); ?>

<?php $__env->startSection('content'); ?>
<!-- Joga a coluna no centro da tela em 6 colunas -->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="$_POST"> <!-- adiciona os campos no formulario via POST, AULA 15  -->
    <?php echo csrf_field(); ?> <!-- Diretiva do blade Que permite adicionar dados ao BANCO DE DADOS, sem isso não envia os formularios: -->
    <!-- DIV dos campos dos eventos: -->
    <div class="form-group">
        <label for="title">Evento:</label> <!-- label = TITULO ou ROTULO -->
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"> <!-- INPUT = ENTRADA de DADOS -->
    </div>
    <div class="form-group">
        <label for="title">Cidade:</label> 
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"> 
    </div>
    <div class="form-group">
        <label for="title">O evento é privado?</label> 
        <select name="private" id="private" class="form-control"> 
        <option value="0">Não</option>
        <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição:</label> 
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea> <!-- CAIXA PRA DIGITAR AS COISAS -->
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento"> <!-- CRIA UM BOTAO -->
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diversos\ruffs Desenvolvedor\Golmoney\hdcevents\resources\views/events/create.blade.php ENDPATH**/ ?>