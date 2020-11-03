<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
<?php if(count($errors)>0): ?>

<div class="error">
    <?php foreach($errors as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach ?>
</div>

<?php endif ?>
