<?php
require_once __DIR__.'/funciones.php';

$control=true;

$id=$_GET['id'];

$cliente= buscarCliente($id);
$nacionalidades=  listadoNacionalidades();
//print_r($cliente);

//echo ((isset($cliente->nacionalidad) && $cliente->nacionalidad =='Argentino/a') ? "selected":'');

require_once __DIR__.'/view/edit_vista.php';
   



