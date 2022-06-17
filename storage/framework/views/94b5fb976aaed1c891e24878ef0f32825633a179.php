<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=PT+Sans&display=swap" rel="stylesheet"> 
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel='stylesheet' href='<?php echo e(asset('css/guest.css')); ?>'>
    <?php echo $__env->yieldContent('script'); ?>
    

</head>

<body>
    <div id="overlay"></div>
    <?php echo $__env->yieldContent('main'); ?>
</body>
</html><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/layouts/guest.blade.php ENDPATH**/ ?>