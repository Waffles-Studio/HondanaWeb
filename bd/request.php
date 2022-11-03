<?php

include("conexion.php");
$conexion = conectar();
if (!isset($_SESSION)) {
    session_start();
}  

if (isset($_POST['registrar2']))
{
    $titulo=$_POST['t_name'];
    $genero=$_POST['t_gen'];
    $editoria=$_POST['t_editorial'];
    $autor=$_POST['t_autor'];

    if($_SESSION['login'] === true){
        try
        {
            $consulta = "INSERT INTO bd_hondanaweb.request VALUES ('$titulo', '$genero', '$editoria', '$autor');";
    
            
            
            $conexion->query($consulta);
            $_SESSION['mensaje'] = "alertify.success('request successfully submitted')";
            header("Location: ../Tabs/library.php");
            
        }
        catch(PDOException $e)
        {
            $_SESSION['mensaje'] = "alertify.error('failure to send the application')";
            header("Location: ../Tabs/library.php");
        }
    }else{
        $_SESSION['mensaje'] = "alertify.error('To send requests, you need to have an account')";
            header("Location: ../Tabs/login.php");
    }

}
?>


