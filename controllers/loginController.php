<?php
class loginController{
    public static function index(){
        include 'database/database.php';
        include 'middleware/login-user.php';
        include 'views/layouts/header.php';
        include 'views/Login/login.php';
    }
}
?>