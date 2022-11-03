<?php
    function conectar()
    {
        //Servidor
        $host = "127.0.0.1:3306";
        $dbname = "bd_hondanaweb";
        $user = "root";
        $pass = "";

        try
        {
            $conectarBD = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $conectarBD -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conectarBD -> exec("set names utf8");
            return $conectarBD;
        }
        catch(PDOException $error) 
        {
            $_SESSION['login'] = false;
            $_SESSION["mensaje"]="alertify.error('Error connecting to the server, please come back later.')";
            header("Location: ../Tabs/login.php");
        }
    }
?>