<?php

//require '../vendor/autoload.php';

class Base {
    function ConexionBD(){
        $con = new PDO('sqlsrv:Server=localhost\\SQLEXPRESS;Database=Pedro', 'user', '12345');
        if(!$con){
            exit;
        }
    return $con;
    }
}

