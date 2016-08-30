<?php
require __DIR__.'/funciones.php';

$control=true;

$nacionalidades= listadoNacionalidades();

require_once __DIR__.'/view/crear_vista.php';
