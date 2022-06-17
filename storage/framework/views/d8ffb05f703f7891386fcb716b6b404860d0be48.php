

<?php $__env->startSection('content'); ?>
<?php if(isset($posted)): ?>
    <div class="messageContainer">
    <div class="messageTop">Post pubblicato correttamente!<span class="xButton">X</span></div></div>
<?php endif; ?>
<article class="main">
    <p class="textStart">Leggi e racconta storie di vita vissuta che ti sono servite da lezione! Ovviamente il tutto in forma anonima! L'unica cosa che condividerai sarà il tuo username. Il tutto accompagnato da delle simpatiche volpi che aiuteranno a ridurre il tuo stress!<br> Inizia subito!</p>  
    <div class="buttonsDiv">
    <div class="buttonsDivInside">
    <button class="buttonBig" data-button="show-new-posts">Guarda i nuovi post</button><button class="buttonBig" data-button="write-post">Scrivi un post</button><button class="buttonBig" data-button="your-posts">Vedi i tuoi post</button><button class="buttonBig" data-button="show-random-fox">Volpe random</button>
    <form name="searchPost" method="post" id="searchPost">
        <?php echo csrf_field(); ?>
        Cerca nei post <input type="text" name="search" id="searchInput"><input type='submit' value="Cerca">
    </form></div></div>
    <div id="startContent">
    <div class="buttonsDivDelete hidden">Post cancellato correttamente!</div>
    </div>
    
<div class="buttonsDivEnd hidden">
<button class="buttonBig" data-button="load-more">Carica più post</button></div>

<div class="containerForm hidden">
    
    <form name="storyForm" id="storyForm" method="post" action="<?php echo e(route('sendpost')); ?>" >
        <?php echo csrf_field(); ?>
        <label name="title">Titolo (max 150 caratteri)</label><input type="text" id="title" name="title" placeholder="Scrivi il tuo titolo...">
        <label name="story">La tua storia (max 3000 caratteri)</label>
        <textarea id="story" name="story" placeholder="Scrivi la tua lezione di vita qui..." rows="10" cols="130"></textarea>
        <input type="hidden" id="urlFox" name="urlFox" value="">
        <input type="submit" id="submit" value="Invia la tua lezione">
    </form>
</div>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hometemp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Unreleased\Documents\Laravel\example-app\resources\views/home.blade.php ENDPATH**/ ?>