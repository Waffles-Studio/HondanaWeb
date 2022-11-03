<?php

include("conexion.php");
$conexion = conectar();
if (!isset($_SESSION)) {
    session_start();
}  

if (isset($_POST['registrar']))
{
    $name=$_POST['name'];
    $corre=$_POST['corre'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    

    $existente = $conexion->query("SELECT Email FROM bd_hondanaweb.users WHERE Email = '$corre'"); /// COMPROBAR SI EL YA ESTA REGISTRADO
    if ($existente->rowCount()>0)
    {
        $_SESSION['mensaje'] = "alertify.error('Sorry, the email you entered already exists. Please try another one again.')";
        header("Location: ../Tabs/login.php");
    }
    else
    {
        if($pass1 == $pass2)
        {
            if($name == null || $name == '' || $name == ' ' || 
                $pass1 == null || $pass1 == '' || $pass1 == ' ' ||
                $corre == null ||$corre == '' ||$corre == ' ')
            {
                $_SESSION['mensaje'] = "alertify.error('No record, check that all fields are filled in.')";
                header("Location: ../Tabs/login.php");
            }
            else{
                try
                {
                    $consulta = "INSERT INTO bd_hondanaweb.users(Email, UserPassword, Name_User, UserRole) VALUES ('$corre','$pass1', '$name', 2);";
    
                    
                    
                    $conexion->query($consulta);
                    $_SESSION['mensaje'] = "alertify.success('User successfully registered')";
                    header("Location: ../index.php");
                    
                }
                catch(PDOException $e)
                {
                    $_SESSION['mensaje'] = "alertify.error('No record, check that all fields are filled in.')";
                    header("Location: ../Tabs/login.php");
                }
                
            }

        }
        else
        {
            $_SESSION['mensaje'] = "alertify.error('Passwords do not match')";
            header("Location: ../Tabs/login.php");
        }        
    }
}
?>


