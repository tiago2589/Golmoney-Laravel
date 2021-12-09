<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title> 
        
        
        <!--Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--CSS da aplicação! -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
        <body>
            <header> <!-- Fazendo o MENU -->
                <nav class="navbar navbar-expand-lg navbar-light ">
                  <div class="collapse navbar-collapse" id="navbar">
                      <a href="/" class="navbar-brand">
                          <img id="img2" src="/img/icon1.png" alt="HDC Events">
                      </a>
                      <ul class="navbar-nav">
                          <li class="navbar-item">
                              <a href="/" class="nav-link">Eventos</a>
                          </li>
                          <li class="navbar-item">
                              <a href="/events/create" class="nav-link">Criar Eventos</a>
                          </li>
                          <li class="navbar-item">
                              <a href="/" class="nav-link">Entrar</a>
                          </li>
                          <li class="navbar-item">
                              <a href="/" class="nav-link">Cadastrar</a>
                          </li>
                      </ul>
                  </div>  
                </nav>
            </header>
        <?php echo $__env->yieldContent('content'); ?><!-- EXTENDE PARA OUTRA PAGINA -->


        <!-- RODAPE -->
        <footer>
            <p>GOLMONEY BOT &copy;2021</p>
        </footer>
        
        <!-- INCONES DO SITE Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        </body>
</html><?php /**PATH D:\Diversos\ruffs Desenvolvedor\Golmoney\hdcevents\resources\views/layouts/main.blade.php ENDPATH**/ ?>