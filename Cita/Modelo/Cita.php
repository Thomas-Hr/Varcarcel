<?php  
require_once('../../conexion.php');
require_once('../../Usuario/Modelo/Usuario.php');
/* --------------------------------------------------------------------------*/
/* --------------------------------------------------------------------------*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* --------------------------------------------------------------------------*/
require '../../FORMULARIODECONTACTO/PHPMailer-master/src/Exception.php';
require '../../FORMULARIODECONTACTO/PHPMailer-master/src/PHPMailer.php';
require '../../FORMULARIODECONTACTO/PHPMailer-master/src/SMTP.php';
/* --------------------------------------------------------------------------*/
/* --------------------------------------------------------------------------*/

class cita extends conexion {



 
  public function __construct(){
    $this->db=parent::__construct();
  }
   

    /*public function validateModuloCargoUsuario(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente'){
      header('Location:../../index.php');
    }
    }
    public function validateModuloEspecialidad(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloCurso(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante'){
      header('Location:../../index.php');
    }
    }
    public function validateModuloSalon(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloMateria(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloAsignacionCargo(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloInasistencia(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante'){
      header('Location:../../index.php');
    }
    }*/
   
    public function getByIdPac($id){
      $rows=null;
      
      $statement=$this->db->prepare("SELECT u.nombreUser
                    FROM Paciente as p
                    INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
                    where p.idUsuarioFK=".$id);
      $statement->execute();
      while($result=$statement->fetch()){
        $rows[]=$result;
      }
      return $rows;
    }
public function addd($idCT,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT)  
 {
  $statement=$this->db->prepare("CALL proInsertCTA(:idCita,:contenido,:fechaCita,:estadoCita,
  :idpacienteFK,:idProfesionalFK,:idEspecialidadFK,:Asistencia);");
  
        $statement->bindParam(':idCita',$idCT);
        $statement->bindParam(':contenido',$contenidoCT);
        $statement->bindParam(':fechaCita',$fechaCitaCT);
        $statement->bindParam(':estadoCita', $estadoCitaCT);
        $statement->bindParam(':idpacienteFK', $idpacienteFKCT);
        $statement->bindParam(':idProfesionalFK',$idProfesionalFKCT);
        $statement->bindParam(':idEspecialidadFK', $idEspecialidadFKCT);
        $statement->bindParam(':Asistencia',$AsistenciaCT);
      if($statement->execute()){
        header('Location:../Vista/add.php');
  }else{
    header('Location:../Vista/edit.php');
  }
}

public function add($idCTA,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT)
 {
  $statement=$this->db->prepare("CALL proInsertCT(:idCita, :contenido,:fechaCita,:estadoCita,
  :idpacienteFK,:idProfesionalFK,:idEspecialidadFK,:Asistencia); ");
        $statement->bindParam(':idCita',$idCTA);
        $statement->bindParam(':contenido',$contenidoCT);
        $statement->bindParam(':fechaCita',$fechaCitaCT);
        $statement->bindParam(':estadoCita',$estadoCitaCT);
        $statement->bindParam(':idpacienteFK',$idpacienteFKCT);
        $statement->bindParam(':idProfesionalFK',$idProfesionalFKCT);
        $statement->bindParam(':idEspecialidadFK',$idEspecialidadFKCT);
        $statement->bindParam(':Asistencia',$AsistenciaCT);
      if($statement->execute()){
    
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
  
  //Attachments

  //Recipients
  $mail->setFrom('correoprubasphp@gmail.com', 'Nueva Solicitud');
  $mail->addAddress('correoprubasphp@gmail.com');
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ya se registru tu cita!!';
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
                    <p style="margin:0;">Esta es tu nueva contraseña recuerda cambiarla </p>
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
    
                              <h2 style="margin:0;">Recuerda llegar a tiempo</h2>
                            
                        <div class="nombre" style=" margin-left: 30px;">
                            <h3><b>Dia de la cita: '.$fechaCitaCT.'</b></h3>
                            
                            
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
    window.history.go(-2);
    </script>';
} catch (Exception $e) {
    echo '<script>
    alert("El mensaje no se envio correctamente verifica los datos");
    window.history.go(-1);
    </script>';
}   
  }else{
    header('Location:../Vista/add.php');
  }
}


    public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectCTId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
}

public function getValidateFech($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectCTId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
}

   public function get(){
         $rows=null;
         $statement=$this->db->prepare("CALL proSelectCT();");
         $statement->execute();
         while ($result=$statement->fetch()){
              $rows[]=$result;
         }
         return $rows;
           }
           public function getPro(){
         $rows=null;
         $statement=$this->db->prepare("CALL proSelectCTPro();");
         $statement->execute();
         while ($result=$statement->fetch()){
              $rows[]=$result;
         }
         return $rows;
           }
           public function getFisio($idfisio){
            $rows=null;
            $statement=$this->db->prepare("CALL proSelectCTfisio(:idfisio);");
            $statement->bindParam(':idfisio',$idfisio);
            $statement->execute();
            while ($result=$statement->fetch()){
                 $rows[]=$result;
            }
            return $rows;
              }

              public function getPa($idPac){
                $rows=null;
                $statement=$this->db->prepare("CALL proSelectCTPaci(:idPac);");
                $statement->bindParam(':idPac',$idPac);
                $statement->execute();
                while ($result=$statement->fetch()){
                     $rows[]=$result;
                }
                return $rows;
                  }

           public function getS(){
            $rows=null;
            $statement=$this->db->prepare("CALL proSelectCTS();");
            $statement->execute();
            while ($result=$statement->fetch()){
                 $rows[]=$result;
            }
            return $rows;
              }

              public function getAS(){
                $rows=null;
                $statement=$this->db->prepare("CALL proSelectCTAS();");
                $statement->execute();
                while ($result=$statement->fetch()){
                     $rows[]=$result;
                }
                return $rows;
                  }

                  public function getPd(){
                    $rows=null;
                    $statement=$this->db->prepare("CALL proSelectCTPd();");
                    $statement->execute();
                    while ($result=$statement->fetch()){
                         $rows[]=$result;
                    }
                    return $rows;
                      }

                      public function getCl(){
                        $rows=null;
                        $statement=$this->db->prepare("CALL proSelectCTCl();");
                        $statement->execute();
                        while ($result=$statement->fetch()){
                             $rows[]=$result;
                        }
                        return $rows;
                          }
              
            
   
                      

public function update($idCT,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT)
 {
  $statement=$this->db->prepare("CALL proUpdateCT(:idCita,:contenido,:fechaCita,:estadoCita,
  :idpacienteFK,:idProfesionalFK,:idEspecialidadFK,:Asistencia);");
        $statement->bindParam(':idCita',$idCT);
        $statement->bindParam(':contenido',$contenidoCT);
        $statement->bindParam(':fechaCita',$fechaCitaCT); 
        $statement->bindParam(':estadoCita',$estadoCitaCT);
        $statement->bindParam(':idpacienteFK',$idpacienteFKCT);
        $statement->bindParam(':idProfesionalFK',$idProfesionalFKCT);
        $statement->bindParam(':idEspecialidadFK',$idEspecialidadFKCT);
        $statement->bindParam(':Asistencia',$AsistenciaCT);
      if($statement->execute()){
    header('Location:../Vista/Cita.php');
  }else{
    header('Location:../Vista/edit.php');
  }
}

public function updateFis($idCitaCT,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT)
 {
  $statement=$this->db->prepare("CALL proUpdateCT(:idCita,:contenido,:fechaCita,:estadoCita,
  :idpacienteFK,:idProfesionalFK,:idEspecialidadFK,:Asistencia);");
        $statement->bindParam(':idCita',$idCitaCT);
        $statement->bindParam(':contenido',$contenidoCT);
        $statement->bindParam(':fechaCita',$fechaCitaCT); 
        $statement->bindParam(':estadoCita',$estadoCitaCT);
        $statement->bindParam(':idpacienteFK',$idpacienteFKCT);
        $statement->bindParam(':idProfesionalFK',$idProfesionalFKCT);
        $statement->bindParam(':idEspecialidadFK',$idEspecialidadFKCT);
        $statement->bindParam(':Asistencia',$AsistenciaCT);
      if($statement->execute()){
    header('Location:../Vista/CitaFisi.php');
  }else{
    header('Location:../Vista/edit.php');
  }
}
      
 public function delete($idCT){
  $statement=$this->db->prepare("CALL proDeleteCT(:idCita)");
  $statement->bindParam(':idCita',$idCT);
  if($statement->execute()){
    header('Location:../Vista/Cita.php');
  }else{
    header('Location:../Vista/delete.php');
  }
    
  }
  
            }
?>