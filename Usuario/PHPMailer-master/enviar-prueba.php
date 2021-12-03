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

    //Generar contraseña
    $pass = substr( md5(microtime()), 1, 10);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ''.$nombre.' Quiere contactar Varcarcel';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>


@media screen and (min-width:1024px){
    #servicios{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}


#servicios h1{
    text-align: center;
    padding: 8px;
    color:rgb(255, 255, 255);
    margin-top: 20px;
}

#servicios {
    background-color: white;
    padding: 20px;
}

.caja{
    width: 95%;
    max-width: 100%;
    margin-top: 20px;
}

.caja h1{
    text-align: center;
    color: #14347C;
    margin: 20px;
}
#caja1 p{
color: #415762;
}

#caja1 li{
width: 100%;
max-width: 100%;
color: #415762; 
}

#caja1 h4,li{
    margin-top: 20px;
    margin-bottom: 10px;
}

#caja1{
    margin-top: 0;
    padding: 30px;
    border: 1px solid #d4d4cb;  
    border-radius: 5px;
    font-size: 18px;  
    box-shadow: 2px 2px 2px gray;
    text-align: center; 
}
#caja2 p{
    color: #415762;
}

#caja2 li{
    color: #415762; 
}

#caja2 h4,li{
    margin-top: 20px;
    margin-bottom: 10px;
}

#caja2{
    margin-top: 0;
padding: 20px;
background-color: #f8f8f4;
border: 1px solid #d4d4cb;  
border-radius: 5px;
font-size: 18px;  
box-shadow: 2px 2px 5px gray;
}

#caja2 iframe{
    height: 100%;
    width: 90%;
   
}


.input{

border-bottom: 1px solid;
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
    margin-bottom:10px ;
    resize: none;

}


h2{
    font-size: 30px;
   text-align: center;
   padding: 10px;
}
 p{
    margin-top: 20px;
    font-size: 16px;
}
.botonE{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #46A2FD;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    margin: auto;
}
header{
    color: white;
    width: 95%;
    background-color: red;
}
header h1{
    color: white;
}
    .infocaja{
        display: flex;
        flex-direction: row;
    }

    .servicio{
        margin-top: 0;
        display: flex;
        flex-direction: row;
    }

    .caja img{
       
        max-width: 100%;
    }

    .caja p{
      
       max-width: 100%; 
    }
    
    .container-footer{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    header{
        color: white;
        width: 100%;
        background-color: #5986ad;
    }
    .servicio h1{
        color: white;
    }
    .caja ul{
        list-style: none;
    }


}
        </style>

    </head>


    <body>
        


        
        <section id="servicios">
            
            <div class="servicio">
                
            
                <article class="caja" id="caja1" >
                    <header>
                        <h1> Nueva consulta de: '.$nombre.'</h1>
                    </header>

                    <img src="https://i.ibb.co/g9hk1sd/Varcarcel.jpg" width="50%" alt="" srcset="">

                </article>
            
                <article class="caja" id="caja2">

                    <label>Informacion de: '.$nombre.'</label>
                        <ul>
                            <li><b>Nombre: </h5>'.$nombre.'</li>
                            <li><b>Telefono: </h5>'.utf8_decode($telefono).'</li>
                            <li><b>Correo: </h5>'.$correo.'</li>
                            <li><b>Mensaje: </h5>'.$mensaje.'</li>
                            <li><b>Contraseña: </h5>'.$pass.'</li>
                        </ul>

                </article>
            
            </div>
            </section>
        

        
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
