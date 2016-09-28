<?php
//require_once __DIR__.'/session.php';
session_start();
if(session_destroy()) 
{
header("Location: login.php"); 
}

