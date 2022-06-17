<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=PT+Sans&display=swap" rel="stylesheet"> 
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel='stylesheet' href='<?php echo e(asset('css/home.css')); ?>'>
    <script src='<?php echo e(asset('js/home.js')); ?>' defer></script>
    

</head>
<body>
<header>
    <h3 id="site_name">FoxLessons</h3>
    <nav>
        <div id="userInfo">
        Utente loggato:  <?php echo e(Session::get('username')); ?></div>
        <a id="logout" href="<?php echo e(route('logout')); ?>">Logout</a>
    </nav>
</header>

<?php echo $__env->yieldContent('content'); ?>

<footer>
    <h2>FoxLessons - 1000008032</h2>
</footer>
</body>
</html><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/layouts/hometemp.blade.php ENDPATH**/ ?>