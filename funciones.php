<?php
error_reporting(E_ALL);

ini_set('display_errors',true);
require __DIR__.'/conf/conf_bd.php';

function listadoCliente(){
    require __DIR__.'/conf/conf_bd.php';
   
    $stmt=$pdo->prepare("SELECT c.id,c.nombre, c.apellido, c.fecha_nacimiento, n.nombre as nacionalidad,c.activo,SPACE(30) AS edad "
        . "FROM `clientes` c,`nacionalidades` n "
        . "WHERE n.id=c.nacionalidad_id;");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $results=$stmt->fetchAll();
    
}

function guardarCliente($info){
    require __DIR__.'/conf/conf_bd.php';
         $consulta = $pdo->prepare('INSERT INTO `clientes`'
                 . '(nombre,apellido,fecha_nacimiento,nacionalidad_id,activo) '
                 . 'VALUES(:nombre, :apellido,:fecha_nacimiento,:nacionalidad_id,:activo);');
         $consulta->bindParam(':nombre', $info['nombre']);
         $consulta->bindParam(':apellido', $info['apellido']);
         $consulta->bindParam(':fecha_nacimiento', $info['fecha_nacimiento']);
         $consulta->bindParam(':nacionalidad_id', $info['nacionalidad']);
         $consulta->bindParam(':activo', $info['activo']);
         $consulta->execute();
         
    
}

function buscarCliente($id){
    require __DIR__.'/conf/conf_bd.php';
    $consulta = $pdo->prepare("SELECT c.nacionalidad_id,c.id,c.nombre, c.apellido, c.fecha_nacimiento, n.nombre as nacionalidad,c.activo,SPACE(30) AS edad "
        . "FROM `clientes` c,`nacionalidades` n "
        . "WHERE n.id=c.nacionalidad_id AND c.id=:id;");
    $consulta->setFetchMode(PDO::FETCH_OBJ);
         
    $consulta->bindParam(':id', $id);
    $consulta->execute();
    
    return $results=$consulta->fetch();
}
function listadoNacionalidades(){
    require __DIR__.'/conf/conf_bd.php';
   
    $stmt=$pdo->prepare("SELECT n.id,n.nombre FROM `nacionalidades` n ;");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $results=$stmt->fetchAll();
    
}

function edad($fecha){
	list($anyo,$mes,$dia) = explode("-",$fecha);
	$anyo_dif  = date("Y") - $anyo;
	$mes_dif = date("m") - $mes;
	$dia_dif   = date("d") - $dia;
	if ($dia_dif < 0 || $mes_dif < 0) $anyo_dif--;
	return $anyo_dif;
}

function validaRequerido($valor){
   if(trim($valor) == ''){
      return false;
   }else{
      return true;
   }
}

function validarEntero($valor, $opciones=null){
   if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
      return false;
   }else{
      return true;
   }
}
//
/*@param String termina la ehjecucion de la lgogica de negocios. rennderizando el templete correspondiente
 * */ 
function devolverPagina($pagina){
    require $pagina;
    die();
}

