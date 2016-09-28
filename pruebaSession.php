<?php

//va en la logica

session_start();//continuar una existente o con una nueva. se fija si tiene una session iniciada entonces se crea una. 
////devuelvel apgina con algo mas: con una Cookie. archivo de texto que el servidor devuelve como respuesta con variables que el cliente guarda.
//finaliza cuando se cierra el navegador

//guardar datos en session
if(!array_key_exists('contador', $_SESSION)){
$_SESSION['contador']=0;
       
}
$_SESSION['contador']= $_SESSION['contador']+1;

//en html
// echo $_Session['contador']; en etiqueta html