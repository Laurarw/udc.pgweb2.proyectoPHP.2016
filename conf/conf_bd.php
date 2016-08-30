<?php
require __DIR__. '/datosBD.php';
try{
    //$pdo=new PDO('mysql:host=localhost;dbname=clientes_db', 'root', '123456');
    
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES UTF8");

    
} catch (PDOException $e) {
    echo 'Error de conexion a la BD:'.$e->getMessage();
    die();

}
