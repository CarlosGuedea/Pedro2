<?php
    session_start();

    if ($_SESSION['Contrasena']=='panquesito'){
        
    }else{
    //Aqui lo redireccionas al lugar que quieras.
        header('Location: /');
        die() ;
    }
?>