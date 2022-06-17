

<?php $__env->startSection('title',  'FoxLessons - Registrati'); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/register.js')); ?>' defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>

    <form name="registration_form" id="registration_form" method="post" action="<?php echo e(route('register')); ?>">
        <h3 id="site_name">FoxLessons</h3>
        <div id="register">Registrati</div>
        <div class="error1 hidden">Compila correttamente i campi.</div>

        <?php if($errors->has('error')): ?>
        <div class="error1">Compila correttamente i campi.</div>
        <?php endif; ?>
        
        <p class="name"> <!-- 1- -->
            <label>Nome<input type='text' name='name' value="<?php echo e(Request::old("name")); ?>"></label>

        </p>
        <p class="surname"> <!-- 2- -->
            <label>Cognome<input type='text' name='surname' value="   <?php echo e(Request::old("surname")); ?>"></label>

        </p>
        <p class="username"> <!-- 3- -->
            <label>Nome Utente<input type='text' name='username' value="<?php echo e(Request::old("username")); ?>"></label>

        </p>
        <p class="email"> <!-- 4- fb-->
            <label>E-Mail<input type='text' name='email' value="<?php echo e(Request::old("email")); ?>"></label>
            
        </p>
        <p class="password"> <!-- 5- -->
            <label>Password <input type='password' name='password' value="<?php echo e(Request::old("password")); ?>"></label>

        </p>
        <p class="confirmpassword"> <!-- 6- frb-->
            <label>Ripeti la password<input type='password' name='confirmpassword' value="<?php echo e(Request::old("confirmpassword")); ?>"></label>

        </p>
        <p id="logandsubmit">
            <a href="<?php echo e(route('login')); ?>" id="loginredirect">Già registrato? Effettua il login.</a><input type='submit' id="submit" value="Registrati">
        </p>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    </form>
</main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/register.blade.php ENDPATH**/ ?>