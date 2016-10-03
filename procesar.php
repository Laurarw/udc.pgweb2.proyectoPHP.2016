<?php
require_once __DIR__.'/session.php';
require_once __DIR__.'/funciones.php';


/*
 * ACCION CREATE
 */
if($_GET['action']=='create'){
    ///PROBANDO VALIDACIONES
    
$errores=[];   
    if($_POST['fecha_nac']==''){
        $info['fecha_nacimiento']='';
        
    }else{
       
         $date = DateTime::createFromFormat('d/m/Y', $_POST['fecha_nac']);
         $fecha=$date->format('Y-m-d');
         $info['fecha_nacimiento']=$fecha;
         
    }
   


$info['nombre']=$_POST['nombre'];
$info['apellido']=$_POST['apellido'];

$info['nacionalidad']=$_POST['lugar_nac'];

if(isset($_POST['activo'])==false){
    $info['activo']=0;
}else{
    $info['activo']=$_POST['activo'];
}

require_once 'validaciones.php';
//die();
if(!empty($errores)){
    
    $nacionalidades= listadoNacionalidades();
    require_once 'view/crear_vista.php';
}else{
    guardarCliente($info);
    header("Location: list.php");
}
   
}
/*
 * ACCION EDITAR
 */

if($_GET['action']=='edit'){
$errores=[];
     //print_r($_POST);
   $id=$_GET['id'];
     $timestamp = strtotime($_POST['fecha_nac']);
$date = date('Y-m-d',$timestamp );

$fecha=$date;



$info['nombre']=$_POST['nombre'];
$info['apellido']=$_POST['apellido'];
$info['fecha_nacimiento']=$fecha;
$info['nacionalidad']=$_POST['lugar_nac'];
if(isset($_POST['activo'])==false){
    $info['activo']=0;
}else{
    $info['activo']=$_POST['activo'];
}
//print_r($info['activo']);
updateCliente($info,$id);
header("Location: list.php");
die();
    
}

if($_GET['action']=='show'){
    // print_r($_GET['action']);
   $id=$_GET['id'];
   $readonly=true;
   $cliente=  buscarCliente($id);
   $nacionalidades= listadoNacionalidades();
    //print_r($cliente->activo);
require_once 'view/show_vista.php';
die();

    
}

