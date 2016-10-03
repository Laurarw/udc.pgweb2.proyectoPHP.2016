<?php require_once 'layout/header.php'; ?> 
<?php require_once 'confirm_delate.php'; 

?> 


 <?php if(isset($_SESSION['sin_permiso'])):  ?>
         <h1> <?php echo $_SESSION['sin_permiso'] ?></h1>
         
         <?php unset($_SESSION['sin_permiso']); ?>
    <?php endif ?>


    <h3>Clientes</h3>
    <a href="crear.php" class="btn btn-sm btn-success">Nuevo</a>
<br><br>
    <table class="table table-hover">
      <thead>
        <tr>       
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Edad</th>      
          <th>Nacionalidad</th>
          <th>Activo</th>
          <th>Operación</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($clientes as $persona): ?>

            <tr>

              <td><?php echo $persona->nombre  ?></td>
              <td><?php echo $persona->apellido  ?></td>
              <td><?php echo $persona->edad  ?></td>
              <td><?php echo $persona->nacionalidad ?></td>
              <td><?php echo ($persona->activo==true?'Si':'No')  ?></td>
              <td>
                  <a href="edit.php?id=<?php echo $persona->id; ?>" class="btn btn-warning">Modificar</a>
                  <a href="procesar.php?action=show&id=<?php echo $persona->id; ?>" class="btn btn-xs btn-info">Ver</a>
                  <input name="<?php echo $persona->id; ?>" type="button"  value="Baja" class="btn btn-danger"/>

                  <input name="cliente_id" type="hidden" value="<?php echo $persona->id ?>" id="cliente_id"/></td>
            </tr>
        <?php endforeach;  ?>
        
      </tbody>
    </table>


<?php require_once 'layout/footer.php'; ?> 