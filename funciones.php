<?php
error_reporting(E_ALL);
ini_set('display_errors',true);


function loginUsuario($nombre,$pass){
     require __DIR__.'/conf/conf_bd.php';
     
    $usuario= buscarUsuario($nombre);
    $pass =sha1($pass);

    if($usuario!= null && $pass==$usuario->contraseña ){
        return $usuario;
    }else{
        return null;
    }
  }
  
 function rolPermisos($nombre){
     require __DIR__.'/conf/conf_bd.php';
     $permisos;
     $consulta=$pdo->prepare("SELECT r.id, r.nombre as rol,GROUP_CONCAT(p.nombre SEPARATOR ',') as permisos FROM `roles` r "
             . "INNER JOIN usuarios_roles_aplicaciones ura ON r.id=ura.roles_id "
             . "INNER JOIN aplicaciones_web a ON a.id=ura.aplicaciones_web_id "
             . "INNER JOIN usuarios u ON ura.usuarios_id=u.id "
             . "INNER JOIN gestion_roles_permisos grp ON ura.roles_id=grp.roles_id "
             . "INNER JOIN permisos p ON p.id=grp.permisos_id "
             . "where a.titulo='Biorgia' and u.nombre= :nombre "
             . "group by r.nombre;");
     $consulta->setFetchMode(PDO::FETCH_OBJ);
         
    $consulta->bindParam(':nombre', $nombre);
    $consulta->execute();
    $results=$consulta->fetch();
     //
    foreach ($results as $usuario){
       
        $permisos= explode(",", $results->permisos);
    }
    
    return $permisos;
     
 }
  

function buscarUsuario($nombre){
    require __DIR__.'/conf/conf_bd.php';
     $consulta=$pdo->prepare("SELECT u.id,u.nombre, u.contraseña, u.estado FROM usuarios u where u.nombre= :nombre");
     $consulta->setFetchMode(PDO::FETCH_OBJ);
         
    $consulta->bindParam(':nombre', $nombre);
    $consulta->execute();
    
    return $results=$consulta->fetch();
    
}

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

function updateCliente($info,$id){
    require __DIR__.'/conf/conf_bd.php';
         $consulta = $pdo->prepare('UPDATE `clientes`  '
                 . 'SET '
                 . 'nombre=:nombre, '
                 . 'apellido=:apellido,'
                 . 'fecha_nacimiento=:fecha_nacimiento,'
                 . 'nacionalidad_id=:nacionalidad_id,'
                 . 'activo=:activo '
                 . 'WHERE id = :id;');
         $consulta->bindParam(':nombre', $info['nombre']);
         $consulta->bindParam(':apellido', $info['apellido']);
         $consulta->bindParam(':fecha_nacimiento', $info['fecha_nacimiento']);
         $consulta->bindParam(':nacionalidad_id', $info['nacionalidad']);
         $consulta->bindParam(':activo', $info['activo']);
         $consulta->bindParam(':id', $id);
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
function delateCliente($id,$estado){
    require __DIR__.'/conf/conf_bd.php';
  
         $consulta = $pdo->prepare("UPDATE `clientes` SET activo= :activo WHERE id = :id;"); 
         $consulta->bindParam(':activo', $estado);
         $consulta->bindParam(':id', $id);
         $consulta->execute();
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

function soloLetras($in){
      if(preg_match('/[^a-Z]/',$in)){ 
          return true;
          
      }else{ 
          return false;
          
      }
}

function fechaValida($fecha){
      $anio = 1998;
      //1998
      $fecha = (explode('/', $fecha, 3));
        //valido dia
        $anioFecha= $fecha[0];
        //$fecha[1] = $mesFecha;
       // $fecha[2] = $anioFecha;
        
        //fecha menor a 1998 es menos a 18 años
        if($anioFecha<$anio){
            return true;
            
        }else{
            return false;
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

