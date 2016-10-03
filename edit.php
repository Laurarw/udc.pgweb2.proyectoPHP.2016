<?php
require_once __DIR__.'/session.php';
require_once __DIR__.'/funciones.php';


$permiso="editar_cliente";
if(in_array($permiso, $permisosUsuario)){
    $id=$_GET['id'];

    $cliente= buscarCliente($id);
    $originalDate = $cliente->fecha_nacimiento;
    $cliente->fecha_nacimiento = date("d-m-Y", strtotime($originalDate));

    $nacionalidades=  listadoNacionalidades();
    

    //echo ((isset($cliente->nacionalidad) && $cliente->nacionalidad =='Argentino/a') ? "selected":'');

    require_once __DIR__.'/view/edit_vista.php';
}else{
    $_SESSION['sin_permiso']="No tiene permiso para esta operación";
    header("Location: list.php");
}


   



