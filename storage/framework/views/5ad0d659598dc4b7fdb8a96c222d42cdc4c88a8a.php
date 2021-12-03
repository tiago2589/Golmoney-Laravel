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
        <img src="/img/golmoneybot.png" alt="baner">
    </head>
        <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light ">
                  <div class="collapse navbar-collapse" id="navbar">
                      <a href="" class="navbar-brand">
                          <img src="/img/icon1.png" alt="HDC Events">
                      </a>
                  </div>  
                </nav>
            </header>
        <?php echo $__env->yieldContent('content'); ?>


        <footer>
            <p>HDC Events &copy; 2021</p>
        </footer>
        </body>
</html><?php /**PATH C:\Users\Desenvolvedores GM\Desktop\Golmoney\hdcevents\resources\views/layouts/main.blade.php ENDPATH**/ ?>