<?php
require 'funciones.php';

//if(empty($_POST)){
    //devolverPagina('form.php');
//}


//print_r($_POST);

//variables;
$errores=[];

if($_GET['action']=='create'){
    //print_r($_GET);
    $date = DateTime::createFromFormat('d/m/Y', $_POST['fecha_nac']);

//var_dump($date);
        //new DateTime($_POST['fecha_nac']);
$fecha=$date->format('Y-m-d');
//print_r($fecha);


$info['nombre']=$_POST['nombre'];
$info['apellido']=$_POST['apellido'];
$info['fecha_nacimiento']=$fecha;
$info['nacionalidad']=$_POST['lugar_nac'];
$info['activo']=$_POST['activo'];

guardarCliente($info);
header("Location: list.php");


    
}


if($_GET['action']=='edit'){
    // print_r($_GET['action']);
   $id=$_GET['id'];
     $timestamp = strtotime($_POST['fecha_nac']);
$date = date('Y-m-d',$timestamp );

$fecha=$date;
//print_r($fecha);


$info['nombre']=$_POST['nombre'];
$info['apellido']=$_POST['apellido'];
$info['fecha_nacimiento']=$fecha;
$info['nacionalidad']=$_POST['lugar_nac'];
$info['activo']=$_POST['activo'];

updateCliente($info,$id);
header("Location: list.php");

    
}




//VALIDACIONES


//required resultadco
//if(!validaRequerido($nombre)){
//  $errores['nombre']='Nombre es requerido';
//}
//if(!validarEntero($edad)){
//    $errores['edad']='Edad es requerido';
//}
//if(!validaRequerido($nacimiento)){
//  $errores['nacimiento']='Nombre es requerido';
//}
//
////var_dump($errores);
//if(empty($errores)){
//    devolverPagina('form_vista.php');
//}else{
//    require 'form_procesado.php';
//}


//FILTER_VALIDATE_INT
//FILTER_SANITIZE_STRING

require_once __DIR__.'/list.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

