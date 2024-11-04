<?php

include 'validar.php';

session_start();

$usuario = $_email['email'];

$estado = false; 
if(isset($usuario)){
    $estado = true;
}

?>