<?php if(isset($errores)):?>
<h1> sdad errores</h1>
<ul>
    <?php foreach ($errores as $item):?>
        <li> <?php echo $item ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
    
