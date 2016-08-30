<?php

require_once __DIR__.'/funciones.php';

$control=true;


$clientes= listadoCliente();

foreach ($clientes as $personas){
    $edad=  edad($personas->fecha_nacimiento);
    $personas->edad=$edad;
}




require_once __DIR__.'/view/listado_vista.php';