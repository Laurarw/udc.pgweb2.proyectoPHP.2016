<?php
require_once __DIR__.'/session.php';
require_once __DIR__.'/funciones.php';


$permiso="eliminar_cliente";
if(in_array($permiso, $permisosUsuario)){
    $id=$_POST['id'];
    delateCliente($id,false);
    
    var_dump($id);
    //header("Location: list.php");
}else{
    $_SESSION['sin_permiso']="No tiene permiso para esta operación";
    //header("Location: list.php");
}