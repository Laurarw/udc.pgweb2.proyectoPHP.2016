<?php
$bower=" /formularioPrueba/bower_components";

error_reporting(E_ALL);

ini_set('display_errors',true);
$edad_cliente=$_GET['edad'];
header('Content-Type:text/html; charset=UTF-8');

try{
    $pdo=new PDO('mysql:host=localhost;dbname=clientes_db', 'root', '123456');
    
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES UTF8");
    
    //armamos sql
    $sql="SELECT apellido, nombre, edad FROM clientes WHERE edad  >= :edad";
    
    //preparamos un statement con el sql anterior
    $stmt=$pdo->prepare($sql);
    
    //especificamos la salida como un array
    $stmt->setFetchMode(PDO::FETCH_OBJ);//podria ser PDO::FECH_OBJ
    
    //sustituimos los parametros con los valores reales
    $stmt->bindParam(':edad', $edad_cliente);
    
    //ejecutamos la consulta
    $stmt->execute();
    
   //recuperamos los datos en el array asoc
    $results=$stmt->fetchAll();
    
    
    
    
} catch (PDOException $e) {
    echo 'Error de conexion a la BD:'.$e->getMessage();

}

echo sprintf('<h1>Clientes registrados mayores de %d años</h1>',$edad_cliente);

//mostramos los datos (ej en un templlate)
foreach ($results as $fila){
    echo sprintf("%s %s (%d a&ntildeos)<br/>",
            $fila->apellido,
            $fila->nombre,
            $fila->edad);

}


