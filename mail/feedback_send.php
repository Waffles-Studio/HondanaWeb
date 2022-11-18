<?php
if (!isset($_SESSION)) {
    session_start();
}
//include "../Conexion/conexion.php";
include "class.phpmailer.php";
include "class.smtp.php";
// $conexion = conectar();
error_reporting(E_ERROR | E_WARNING | E_PARSE);


if(isset($_POST['Enviar']))
{
    //Email de contraseña a recuperar
    //$email_reg=$_POST['email_reg'];
    $email_reg='brianba3@hotmail.com';
    $email_name=$_POST['email_name'];
    $email_content=$_POST['email_content'];

    //Datos del correo a enviar
    $email_user = "itsl.lerdo529@gmail.com"; //CORREO
    $email_password = "kwvadmycuwysfjyr"; //CONTRASEÑA
    $the_subject = "Comments-HondanaWeb";
    $address_to = $email_reg;
    $from_name = "HondanaWeb";
    $phpmailer = new PHPMailer();

    //Agregar if - Si esta logeado (Cambiar)
    try
    {
        // ---------- datos de la cuenta de Gmail -------------------------------
        $phpmailer->Username = $email_user;
        $phpmailer->Password = $email_password; 
        //-----------------------------------------------------------------------
        // $phpmailer->SMTPDebug = 1;
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Host = "smtp.gmail.com"; // GMail
        $phpmailer->Port = 465;
        $phpmailer->IsSMTP(); // use SMTP
        $phpmailer->SMTPAuth = true;

        $phpmailer->setFrom($phpmailer->Username,$from_name);
        $phpmailer->AddAddress($address_to); // para quien sera enviado // recipients email
        $phpmailer->Subject = utf8_decode($the_subject);	
        //Mensaje
        $body_email = "
        <div style='background:#fff;background-color:#fff;Margin:0px auto;max-width:500px'>
            <table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#000;background-color:#fff;width:100%'>
                <tbody>
                    <tr>
                        <td>
                            <div style='font-size:13px;width:100%'>
                                <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top' width='100%'>
                                    <tbody>
                                        <tr>
                                            <td style='align-items:center;text-align:center;'>
                                                <img alt='Bienvenido/a' src='https://www.lerdo.tecnm.mx/templates/tec19/images/logo_itsl.png' width='200'> <br><br>                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <div align='center'>
                                                        <h3 style='font-size:20px'> Feedback HondanaProject
                                                    </div>
                                            </td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style='background:#fff;background-color:#fff;Margin:0px auto;max-width:500px'>
            <table border='0' cellpadding='0' cellspacing='0' role='presentation'>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <table border='0' cellpadding='0' cellspacing='0' role='presentation'>
                                    <tbody>
                                        <tr>
                                            <td style='padding:10px 25px;'><div style='font-family:Raleway,Helvetica,Arial,sans-serif;font-size:15px;line-height:22px;text-align:left;color:black'> 
                                                <p><b>Hi, Admin!</b></p> 
                                                <p>A user has a new comment for our website!</p> 
                                            </div> 
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td style='font-size:0px;padding:10px 25px;word-break:break-word'> 
                                            <div style='font-family:Raleway,Helvetica,Arial,sans-serif; width: 400px; font-size:15px;line-height:22px;text-align:left;color:#666666' > 
                                                <p style='background-color:rgb(181, 230, 29); padding:20px; text-decoration:none; border-radius: 15px; color:black!important'>
                                                    <strong>Name: </strong> {$email_name}<br><br>
                                                    <strong><span class='il'>Content</span>: </strong> {$email_content} <br>
                                                </p> 
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table> 
                                <br>
                                <div style='width: 100%; text-align: center;'>
                                    <a style='text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; border-radius: 15px;  background-color: rgb(34, 177, 76)' href='http://hondanaweb.test/index.php'>Go to website </a> 
                                </div>
                                <p style='color: #b3b3b3; font-size: 12px; text-align: left;margin: 30px 0 0'>
                                    We are sending you this email to notify you about important notifications on HondanaProject Web services. <br>
                                    2022 HondanaProject, México.
                                </p>

                            </div> 
                        </td>
                    </tr>
                    </tbody> 
            </table>
        </div>
        ";

        $phpmailer->Body = utf8_decode($body_email);
        $phpmailer->IsHTML(true);

        if(!$phpmailer->send())
        {
            $_SESSION["mensaje"]="alertify.error('An error has occurred, the mail could not be sent.')";
            header("Location: ../Tabs/feedback.php");
        }
        else
        {
            $_SESSION["mensaje"]="alertify.success('Your comment has been sent, thank you for helping us :)')";
            header("Location: ../Tabs/feedback.php");
        }

    }
    catch(PDOException $error)
    {
        $_SESSION["mensaje"]="alertify.error('An error has occurred, the mail could not be sent. \n\nError: ".$error->getMessage()."')";
        header("Location: ../Tabs/feedback.php");

    }
}



?>