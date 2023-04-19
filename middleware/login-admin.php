<?php

session_start();

$db = new Base;

$conn=$db->ConexionBD();

$Email=htmlspecialchars($_POST['Email']);

try{
    if(isset($_POST['Email'])){
        $stmt = $conn->prepare("SELECT * FROM Usuario WHERE Email = :Email");
        $stmt->bindParam(':Email', $Email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $Contrasena=$_POST['Contrasena'];

        $truecontrasena=$row['Contrasena'];
    
        if($truecontrasena==$Contrasena){
            $id = $_SESSION['ID']=$row['ID'];
            $usuario = $_SESSION['Usuario']=$row['Email'];
            $_SESSION['Contrasena']=$truecontrasena;
            header('Location: /AdminPanel');
    
        }
    }
}catch(PDOException $ex){
    echo $ex;
}