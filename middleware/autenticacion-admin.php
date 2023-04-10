<?php
    session_start();

    if ($_SESSION['Contrasena']=='e0ba20b082b7e0e28da648342b92f6a7'){
        
    }else{
    //Aqui lo redireccionas al lugar que quieras.
        header('Location: /');
        die() ;
    }
?>