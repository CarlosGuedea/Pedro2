<?php
class homeController{
    public static function index(){
        include 'views/layouts/header.php';
        include 'views/landing/landing.php';
        include 'views/layouts/footer.php';
    }
}
?>