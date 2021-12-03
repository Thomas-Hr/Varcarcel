<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    /*------------------------------------*/                    
    $mail->Username   = 'correoprubasphp@gmail.com';                     //SMTP username
    $mail->Password   = 'sebastianpaez135';                               //SMTP password
    /*------------------------------------*/                           
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('correoprubasphp@gmail.com', 'Nuevo Contacto');
    $mail->addAddress('correoprubasphp@gmail.com');
    //Attachments


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ''.$nombre.' Quiere contactar Varcarcel';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="x-apple-disable-message-reformatting">
      <title></title>
      
      <style>
        table {
        border-collapse:collapse;
        border-spacing:0;border:none;margin:0;}
        div, td {
            padding:0;}
        div {margin:0 !important;}
      </style>
      <style>
        table, td, div, h1, p {
          font-family: Arial, sans-serif;
        }
        @media screen and (max-width: 530px) {
          .unsub {
            
            display: block;
            padding: 8px;
            margin-top: 14px;
            border-radius: 6px;
            background-color: #aaaaaa;
            text-decoration: none !important;
            font-weight: bold;
          }
          .col-lge {
            max-width: 100% !important;
          }
        }
        @media screen and (min-width: 531px) {
          .col-sml {
            max-width: 27% !important;
          }
          .col-lge {
            max-width: 73% !important;
          }
        }
      </style>
    </head>
    <body style="margin:0;padding:0;word-spacing:normal;background-color:#c9c9c9;">
      <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
        <table role="presentation" style="width:100%;border:none;border-spacing:0;">
          <tr>
            <td align="center" style="padding:0;">
              <!--[if mso]>
              <table role="presentation" align="center" style="width:600px;">
              <tr>
              <td>
              <![endif]-->
              <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                <tr>
                  <td style="background-color: #ffffff; padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                    <a href="http://www.example.com/" style="text-decoration:none;"><img src="https://i.ibb.co/g9hk1sd/Varcarcel.jpg" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:30px;background-color:#ffffff;">
                    <h1 style="margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">Información!</h1>
                    <p style="margin:0;">Estos son los datos de: '.$nombre.' </p>
                  </td>
                </tr>
                
                <tr>
                  <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                    <!--[if mso]>
                    <table role="presentation" width="100%">
                    <tr>
                    <td style="width:145px;" align="left" valign="top">
                    <![endif]-->
                    <div class="col-sml" style="display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;">
                      <img src="https://assets.codepen.io/210284/icon.png" width="115" alt="" style="width:80%;max-width:115px;margin-bottom:20px;">
                    </div>
                    <!--[if mso]>
                    </td>
                    <td style="width:395px;padding-bottom:20px;" valign="top">
                    <![endif]-->
                    
                    <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
    
                              <h2 style="margin:0;">Información del contacto</h2>
                            
                        <div class="nombre" style=" margin-left: 30px;">
                            <h3><b>Nombre: '.$nombre.'</b></h3>
                            <h3><b>Correo: '.$correo.'</b></h3>
                            <h3><b>Telefono: '.$telefono.'</b></h3>
                            <h3><b>Mensaje: '.$mensaje.'</b></h3>
                        </div>
                    </div>
                  </td>
                </tr>
                    
                <tr>
                    <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;">
                      <a href="http://www.example.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/1200x800-2.png" width="600" alt="" style="width:100%;height:auto;display:block;border:none;text-decoration:none;color:#363636;"></a>
                    </td>
                  </tr>
                <tr>
                  <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                    <p style="margin:0 0 8px 0;"><a href="http://www.facebook.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a> <a href="http://www.twitter.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/twitter_1.png" width="40" height="40" alt="t" style="display:inline-block;color:#cccccc;"></a></p>
                    <p style="margin:0;font-size:14px;line-height:20px;">&reg; Todos los derechos reservados 2021</p>
                  </td>
                </tr>
              </table>
              <!--[if mso]>
              </td>
              </tr>
              </table>
              <![endif]-->
            </td>
          </tr>
        </table>
      </div>
    </body>
    </html>';
    $mail->send();
    
    echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';
} catch (Exception $e) {
    echo '<script>
    alert("El mensaje no se envio correctamente verifica los datos"'.$nombre.'" "'.utf8_decode($telefono).'" "'.$correo.');
    window.history.go(-1);
    </script>';
}   
