<?php if(isset($errores)):?>
<h5 class="text-info">Revise los siguientes errores y sus campos</h5>
<ul>
    <?php foreach ($errores as $item):?>
        <li class="text-danger"> <?php echo $item ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
    
