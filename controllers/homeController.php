<?php
class homeController{
    public static function index(){
        include 'views/layouts/header.php';
        include 'views/landing/landing.php';
        include 'views/layouts/footer.php';
    }

    public static function paquetes(){
        include 'database/database.php';
        include 'middleware/paquetes-solicitud.php';
        include 'views/layouts/header.php';
        include 'views/landing/paquetes.php';
        include 'views/layouts/footer.php';
    }

    public static function nosotros(){
        include 'views/layouts/header.php';
        include 'views/landing/nosotros.php';
        include 'views/layouts/footer.php';
    }
}
?>