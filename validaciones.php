<?php
if(validaRequerido($info['nombre'])==FALSE){
    $errores['nombre']='Nombre es requerido';
  
}

if(validaRequerido($info['apellido'])==false){
    $errores['apellido']='Apellido es requerido';
}

if(validaRequerido($info['fecha_nacimiento'])==false){
    $errores['fecha_nacimiento']='Fecha de nacimiento es requerido';
}else{
    if(fechaValida($info['fecha_nacimiento'])==false){
        $errores['fecha_nacimiento']='No puede ser menor a 18 años';
    }
}
if(validaRequerido($info['nacionalidad'])==false){
    $errores['nacionalidad']='Nacionalidad es requerido';
}


