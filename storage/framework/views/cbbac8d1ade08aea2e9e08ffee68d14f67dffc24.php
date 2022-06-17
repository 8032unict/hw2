

<?php $__env->startSection('title',  'FoxLessons - Welcome'); ?>




<?php $__env->startSection('main'); ?>
<main>
    <h3 id="site_name">FoxLessons</h3>
    <div class="buttonWelcomeDiv">
        <a href="  <?php echo e(route('login')); ?>" class="buttonBig">Login</a><a href="<?php echo e(route('register')); ?>" class="buttonBig">Registrati</a>
    </div>
</main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>