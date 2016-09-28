<?php

//recuperar la sesion actual
session_start();

//cierro la session
// borrar de lamemoria y del disco
//en memoria
session_unset();//antes. setear todo
session_destroy();//invalido lso datos de session
//redireccionar
 header('Location: list.php');
 
 
 /*
  * LOGEO
  */
//Hacer una funcion
 //inicia session: session_star();
 //el usuario esta NO esta logeado?
 if(!isset($_SESSION['esta_logeado']) || $_SESSION['esta_logeado'] != true)){
     header('Location: login.php');
     die();//siempre despues de una redireccion
 }

 /*
  * LOGIN PHP
  */
 
 session_start();
 //se guardan los roles y permisos del usuario.
 if(!empty($_POST)){ //proceso el formulario
     //recibir valores del form
     //buscar el usuario en la base de datos con esos valores
     //si encuentra el usuario
     //$_session['esta_logeado]=true;
     //recueprar role sy ermisos de la base y guardarlos en session. $_Session['permisos']['']='alta_cliente').
        //settear variables de session y redirigir al area segura
     //sino
     //mostrar el form de nuevo, con un mensaje con usuario no valido
 }else{
     //mostrar form login
     require 'login_form.php';
     die();
 }
