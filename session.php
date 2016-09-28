<?php
  session_start();
  
  if(!isset($_SESSION['login_user'])){
     
      header("location:login.php");
   }else{
       $usser = $_SESSION['login_user'];
       $permisosUsuario=$_SESSION['permisos'];
   }

