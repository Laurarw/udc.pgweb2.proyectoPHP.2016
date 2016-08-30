<?php require_once 'layout/header.php'; ?> 
<?php require_once 'confirm_delate.php'; ?> 
 <?php if(isset($control)==false):  ?>
         <h1> No tiene permiso de ingreso en esta pagina.</h1>
         
         <?php die(); ?>
    <?php endif ?>

<div class="container">
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
              <td><?php echo $persona->activo  ?></td>
              <td><a href="edit.php?id=<?php echo $persona->id; ?>" class="btn btn-xs btn-primary">Modificar</a>
                  <a href="procesar.php?action=delete&id=<?php echo $persona->id; ?>" class="btn btn-xs btn-danger">Eliminar</a></td>
            </tr>
        <?php endforeach;  ?>
        
      </tbody>
    </table>
</div>

<?php require_once 'layout/footer.php'; ?> 