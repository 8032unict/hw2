

<?php $__env->startSection('title',  'FoxLessons - Login'); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/login.js')); ?>' defer></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<main>
    <form name="login_form" method="post" id="login_form" autocomplete="off" action="<?php echo e(route('login')); ?>">
        <h3 id="site_name">FoxLessons</h3>
        <?php if($errors->has('error')): ?>
            <div class="errorLogin">Nome utente o password errata.</div>
        <?php endif; ?>
        <div class="error1 hidden">Compila tutti i campi.</div>
        <p>
            <label class="username">Nome Utente<input type='text' name='username' value="<?php echo e(old("username")); ?>"></label>
        </p>
        <p>
            <label class="password">Password <input type='password' name='password'></label>
        </p>
        <p id="logandsubmit">
            <a href="<?php echo e(route('register')); ?>" id="loginredirect">Non sei membro? Registrati.<a><input type='submit' value="Login"></label>
        </p>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    </form>
</main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/login.blade.php ENDPATH**/ ?>