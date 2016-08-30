<?php require_once 'layout/header.php'; ?> 

    <?php if(isset($control)==false):  ?>
         <h1> No tiene permiso de ingreso en esta pagina.</h1>
    <?php endif ?>
         
         <div class="container"> 
             <h3>Editar Cliente: <?php echo $cliente->nombre.','.$cliente->apellido ?></h3>
             <form class="form-horizontal form-group" action="procesar.php?action=edit" method="POST">
                 
                 
                 
       <?php require 'view/form_vista.php'; ?>

          <input type="submit" class="btn btn-primary">
            
        </form> 
        
         </div>
         
         

          
<?php require 'layout/footer.php'; ?> 
