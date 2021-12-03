<?php
require_once ('conexion.php');
class metodos extends conexion{
public function __construct(){
	  $this->db=parent::__construct();

}

/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
public function getMaxId(){
	$rows=null;
	
	$statement=$this->db->prepare("SELECT MAX(idPaciente) AS id FROM Paciente;");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}

public function nombrePro(){
	$rows=null;
	
	$statement=$this->db->prepare("SELECT * from nombrePro;");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
// public function getPacienteCT(){
// 	$rows=null;
// $statement=$this->db->prepare("call ConsultaPaciente();");
// $statement->execute();
// while($result=$statement->fetch()){
// 	$rows[]=$result;
// }
// return $rows;
// }


public function getPacienteCT(){
	$rows=null;
$statement=$this->db->prepare("call VistaPacienteTT();");
$statement->execute();
while($result=$statement->fetch()){
	$rows[]=$result;
}
return $rows;
}
/*------------------------------------------------------------*/
public function getRol(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Rol");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

public function getUsuario(){
		$rows=null;
	$statement=$this->db->prepare("CALL getUsuarioProfesional();");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

public function getUsuarioPaciente(){
	$rows=null;
$statement=$this->db->prepare("SELECT p.idPaciente,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser,p.estadoPaciente
FROM Usuario as u
INNER JOIN paciente as p on  p.idUsuarioFK=u.idUsuario
left JOIN cita as c on  p.idpaciente=c.idpacienteFK
where estadoUser = 'Activo' AND estadoPaciente ='Activo' 
group by idPaciente;");
$statement->execute();
while($result=$statement->fetch()){
	$rows[]=$result;
}
return $rows;
}
/*------------------------------------------------------------*/
public function getUsuarioFisioterapeuta(){
	$rows=null;
$statement=$this->db->prepare("SELECT p.idProfesional,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser,p.estadoMedico
FROM Profesional as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
left JOIN cita as c on  p.idProfesional=c.idProfesionalFK
where estadoUser = 'Activo' AND estadoMedico='Activo'
group by idProfesional;");
$statement->execute();
while($result=$statement->fetch()){
	$rows[]=$result;
}
return $rows;
}
/*------------------------------------------------------------*/
public function getTdocumento(){
		$rows=null;
	$statement=$this->db->prepare("SELECT tipoDocumento from usuario where idusuario=idusuario;");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

 public function getAgenda(){
		$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Agenda");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
            }
/*------------------------------------------------------------*/
  public function getDetallesAgenda(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM DetallesAgenda");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/
public function getNoticia(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Noticia");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/
public function getProfesional(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Profesional");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/
// public function getPaciente($id){
// 	$rows=null;
// 	$statement=$this->db->prepare("SELECT * FROM Paciente where idPaciente=".$id);
// 	$statement->execute();
// 	while($result=$statement->fetch()){
// 		$rows[]=$result;
// 	}
// 	return $rows;
// }
/*------------------------------------------------------------*/

public function getpacientes(){
	$rows=null;
	$statement=$this->db->prepare("CALL VistaPacienteTTt();");
	$statement->execute();
	while ($result=$statement->fetch()){
		 $rows[]=$result;
	}
	return $rows;
	  }


public function getPacientesHis(){
	$rows=null;
	$id=$_GET['id'];
	$statement=$this->db->prepare("SELECT * FROM VistaPaciente where idPaciente=".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}


public function getUsuarioEdit($id){
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




/*************************************** */
public function getCita(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Cita");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

public function getEnfermedad(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Enfermedad");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

public function get_EnfermedadW(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Enfermedad ");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/

public function getEnfermedadW($id){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Enfermedad where idEnfermedad=".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/
/*------------------------------------------------------------*/

public function getsoli(){
	$rows=null;
	$statement=$this->db->prepare("SELECT idpaciente from paciente where idUsuarioFK=6");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/


public function getPaciente_enfermedad($id){
	$rows=null;                                                           
	$statement=$this->db->prepare("SELECT * FROM PacienteEnfermedad where idPacienteFk=".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}

/*------------------------------------------------------------*/

public function getPacienteenfermedad($id){
	$rows=null;                                                           
	$statement=$this->db->prepare("SELECT * FROM PacienteEnfermedad where idPacienteFk=".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
public function VistaPaciente($id){
	$rows=null;                                                           
	$statement=$this->db->prepare("SELECT * FROM VistaPaciente where idPaciente =".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
public function VerPaciente($id){
	$rows=null;                                                           
	$statement=$this->db->prepare("SELECT * FROM VistaPacientex where idPaciente =".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
public function VistaFisio($idf){
	$rows=null;                                                           
	$statement=$this->db->prepare("SELECT * FROM Vistafisio where idProfesional =".$idf);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}


/*------------------------------------------------------------*/
public function getEF(){
	$rows=null;
	$statement=$this->db->prepare('SELECT * FROM VistaPacienteEnfermedad');
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/


public function getEspecialidad(){
	$rows=null;
	$statement=$this->db->prepare("SELECT * FROM Especialidad");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
/*------------------------------------------------------------*/



public function IDPE(){
	$rows=null;
	$statement=$this->db->prepare("SELECT idPaciente FROM  Paciente  ORDER BY idPaciente DESC LIMIT 1;");
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}
public function getPF(){
	$rows=null;
$statement=$this->db->prepare("CALL getPF();");
$statement->execute();
while($result=$statement->fetch()){
	$rows[]=$result;
}
return $rows;
}

/*********************************************************** */

public function HistoriaClinica(){

	//$id=$statement=$this->db->prepare("SELECT idPaciente FROM  Paciente ;");
	$rows=null;
	$id=$_GET['id'];
	$statement=$this->db->prepare("SELECT * FROM HistoriaClinica Where idPacienteFk =".$id);
	$statement->execute();
	while($result=$statement->fetch()){
		$rows[]=$result;
	}
	return $rows;
}


}
?>
