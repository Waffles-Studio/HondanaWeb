<?php
    include("conexion.php");
    $conexion = conectar();
    if (!isset($_SESSION)) {
        session_start();
    }   
    $email = $_POST["corr"];
    $pass = $_POST["pass"];

try
{
    $sql = "SELECT Id_User, Email, UserPassword, Name_User FROM bd_hondanaweb.users 
    where Email = '$email' and UserPassword = '$pass'";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
    $numero = $sentencia -> rowCount();

    if($numero > 0)
    {
        foreach($sentencia as $fila)
        {
            $_SESSION['id'] = $fila["Id_User"];
            $_SESSION['Nombre'] = $fila["Name_User"];
        }
        $nomb = $_SESSION['Nombre'];
        $_SESSION['login'] = true;
        $_SESSION['correo'] = $email;
        $_SESSION['mensaje'] = "alertify.success('$nomb, welcome to the HondanaProject system')";
        header("Location: ../index.php");
    }
    else
    {
        $_SESSION['login'] = false;
        $_SESSION['mensaje'] = "alertify.warning('The email is not registered or the password entered does not match. Please try again...')";
        header("Location:../Tabs/login.php");    
    }
}
catch(PDOException $e)
{
    $_SESSION['login'] = false;
    $_SESSION['mensaje'] = "alertify.error('An error has occurred, unable to log in. Error: ".$e->getMessage()."')";
    header("Location:../Tabs/login.php"); 
}

?>