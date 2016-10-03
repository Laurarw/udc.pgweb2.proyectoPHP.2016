<?php require_once 'layout/header.php'; ?> 


         
         
             <h3> Cliente</h3>
             
             <?php require_once 'layout/errores.php'; ?> 
             
             <div id="show"> 
                 
                 
                 
       <?php require 'view/form_vista.php'; ?>

                <a href="edit.php?id=<?php echo $cliente->id; ?>" class="btn btn-warning">Modificar</a>
                 <a href="list.php" class="btn btn-info">Volver</a>
            
       
        
       </div>
          
<?php require 'layout/footer.php'; ?> 



