<?php

session_start();

$db = new Base;

$conn=$db->ConexionBD();


try{
    if(isset($_POST['Email'])){
        $stmt = $conn->prepare("SELECT * FROM Usuario WHERE Email = :Email");
        $stmt->bindParam(':Email', $Email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $Email=htmlspecialchars($_POST['Email']);
        $Contrasena=$_POST['Contrasena'];
    
        $truecontrasena='e0ba20b082b7e0e28da648342b92f6a7';
        $hashcontrasena=md5(hash('sha512',$Contrasena));
    
        if($truecontrasena==$hashcontrasena){
            $id = $_SESSION['ID']=$row['ID'];
            $usuario = $_SESSION['Usuario']=$row['Email'];
            $_SESSION['Contrasena']=$truecontrasena;
            header('Location: /AdminPanel');
    
        }
    }
}catch(PDOException $ex){
    echo $ex;
}