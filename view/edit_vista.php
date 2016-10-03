<?php require_once 'layout/header.php'; ?> 



         
         
             <h3>Editar Cliente: <?php echo $cliente->nombre.','.$cliente->apellido ?></h3>
             <form class="form-horizontal form-group" action="procesar.php?action=edit&id=<?php echo $cliente->id ?>" method="POST">
                 
                 
                 
             <?php require 'view/form_vista.php'; ?>
                    <input name="id" type="hidden" value="<?php echo $cliente->id ?>" id="cliente_id"/>

                 <input type="submit" class="btn btn-primary" value="Actualizar">
                 
                 <a href="list.php" class="btn btn-info">Volver</a>
            
        </form> 
        
  
         
         

          
<?php require 'layout/footer.php'; ?> 
