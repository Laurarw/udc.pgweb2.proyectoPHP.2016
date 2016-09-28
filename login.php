<?php
session_start();
//require_once __DIR__.'/session.php';
require_once __DIR__.'/funciones.php';

//si es enviado por el post del form de loginIn

if (isset($_POST['submit'])) {
    $errores=[]; // Variable To Store Error Message
    if (empty($_POST['usuario']) || empty($_POST['pass'])) {
     $errores['login'] = "Usuario o Contraseña es inválida";
    }
    else
    {
        // Define $username and $password
        $usser=$_POST['usuario'];
        $pass=$_POST['pass'];
        $usuario= loginUsuario($usser,$pass);
        
           
        if ($usuario !=null) {
            $_SESSION['login_user']=$usuario; // Initializing Session
            $_SESSION['permisos']=  rolPermisos($usuario->nombre);
           
         
            header("Location: list.php"); // Redirecting To Other Page
        } else {
            
            $errores['login'] = "Usuario o Contraseña es inválida";
            $usser=null;
            require_once __DIR__.'/view/login_vista.php';
        }
       
    }
}else{
    if(isset($_SESSION['login_user'])){
        header("Location: list.php");
    }
  $usser=null;
    require_once __DIR__.'/view/login_vista.php';
}

