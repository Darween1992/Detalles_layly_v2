<?php


function conectarDB(){
    $db = mysqli_connect('localhost', 'root', '123','proyec_detalles_layly');
    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}