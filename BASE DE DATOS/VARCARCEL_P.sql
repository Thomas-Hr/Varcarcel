/*------------------------------------------------------------------*/
USE Varcarcel;
/*------------------------------------------------------------------*/
/*Usuario*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectUser()
begin
select * from Usuario;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*PacienteEnfermedad*/
/*------------------------------------------------------------------*/
/*RegistroUsuario*/
delimiter //
create procedure PacienteEnfermedad()
begin
     select * from paciente_enfermedad;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*Paciente max*/
/*------------------------------------------------------------------*/
delimiter //
create procedure Masy()
begin
    SELECT MAX(idPaciente) AS id FROM Paciente;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*UsuarioID*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectUserId(in id int)
begin
select * from Usuario where idUsuario=(id);
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proUpdateUser*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proUpdateUser(
in id int, in Usernom varchar(40), in Userapellido varchar(40), in tipoDoc varchar(30), in NumDoc int, in FechaNac date,
in userCorreo varchar(70), in passwordU varchar(40), in tel varchar(10), in Userdireccion varchar(50), in UserEstado varchar(10),
in tipoRol varchar(23) )
begin
update Usuario set  nombreUser = Usernom, apellidoUser = Userapellido, tipoDocumento = tipoDoc, NumDocumento = NumDoc,
FechaNacimiento = FechaNac, correoUser = userCorreo, contrasena = passwordU, telefono = tel, direccionUser = Userdireccion,
estadoUser =UserEstado, tipoRol=tipoRol where idUsuario = id;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*RegistroUsuario*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proInsertUser(
in idUsuario int, in nombreUser varchar(40), in apellidoUser varchar(40), in tipoDocumento varchar(30), in NumDocumento int,
in FechaNacimiento date, in correoUser varchar(70), in contrasena varchar(40), in telefono varchar(10), 
in direccionUser varchar(50), in estadoUser varchar(10), in tipoRol varchar(23)
)
begin
insert into Usuario values (idUsuario, nombreUser,apellidoUser, tipoDocumento,  NumDocumento,FechaNacimiento,
correoUser, contrasena, telefono , direccionUser, "Inactivo" , tipoRol);
end //
delimiter ;


/*------------------------------------------------------------------*/
/*RegistroUsuario*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proDeleteUser(in id int)
begin
delete from Usuario where  idUsuario = id;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*RegistroUsuario*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectPC()
begin
select * from VistaPaciente;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proUpdatePC*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proUpdatePC(
 in idPC  int, in pesoPC int(3), in estaturaPC int(3), in estadoPacientePC varchar(10),
 in antecedentesFamiliaresPC varchar(300), in idUsuarioFKPC INT
)
begin
update Paciente set  peso = pesoPC, estatura = estaturaPC, estadoPaciente = estadoPacientePC,
    antecedentesFamiliares = antecedentesFamiliaresPC, idUsuarioFK = idUsuarioFKPC
 where idPaciente = idPC;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proInsertPC*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proInsertPC(idPaciente  int, peso  int(3), estatura int(3),
estadoPaciente varchar(10), antecedentesFamiliares varchar(300), idUsuarioFK INT
)
begin
insert into Paciente values ( idPaciente, peso, estatura, estadoPaciente, antecedentesFamiliares, idUsuarioFK );
end //
delimiter ;

/*------------------------------------------------------------------*/
/*proDeletePC*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proDeletePC(in idPC int)
begin
delete from Paciente where  idPaciente = idPC;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proInsertPE*/
/*------------------------------------------------------------------*/
  delimiter //
create procedure proInsertPE(
   in idPacienteFK int, 
   in idEnfermedadFK int, 
   in id int
    )
begin
insert into paciente_enfermedad value  ( idPacienteFK, idEnfermedadFK, id);
end //
delimiter ; 

/*------------------------------------------------------------------*/
/*proUpdatePE*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proUpdatePE(
  in idPCFK int,in idENFK int
    )
begin
update paciente_enfermedad set  
 idEnfermedadFK = idENFK where idPacienteFK=idPCFK;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proSelectPCId*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectPCId(in id int)
begin
select * from VistaPaciente where idPaciente=(id);
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proSelectFS*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectFS()
begin
select * from Profesional;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proSelectFSId*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectFSId(in id int)
begin
select * from VistaProfesional where idProfesional=(id);
end //
delimiter ;

/*------------------------------------------------------------------*/
/*proUpdateFS*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proUpdateFS(
in  idFS int, in  estadoMedicoFS Varchar(500), in tarjetaProfesionalFS varchar(8),
in idUsuarioFKFS  int, in idEspecialidadFKFS int, in HorasTFS time)
begin
update Profesional set  
estadoMedico = estadoMedicoFS, tarjetaProfesional = tarjetaProfesionalFS, idUsuarioFK = idUsuarioFKFS,
idEspecialidadFK =idEspecialidadFKFS, HorasT = HorasTFS
 where idProfesional = idFS;
end //

delimiter ;
/*------------------------------------------------------------------*/
/*proInsertFS*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proInsertFS(
in idProfesional int, in estadoMedico Varchar(500), in tarjetaProfesional boolean,
in idUsuarioFK  int, in idEspecialidadFK int, in HorasT time)
begin
insert into Profesional values (idProfesional, estadoMedico, tarjetaProfesional, idUsuarioFK, idEspecialidadFK,
HorasT);
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proDeleteFS*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteFS(in idFS int)
begin
delete from Profesional where  idProfesional = idFS;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proSelectNT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectNT()
begin
select * from  noticia;
end //
delimiter ;
call proSelectNT();
/*-----------------------------------------------------------------------*/
/*proSelectNotVis*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectNotVis()
begin
select idNoticia,titulo,descripcion,imagen,fechaCreate
from noticia
order by idNoticia DESC;
end //
delimiter ;
call proSelectNotVis();
/*-----------------------------------------------------------------------*/
/*proSelectNTId*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectNTId(in id int)
begin
select * from Noticia where idNoticia=(id);
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proUpdateNT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proUpdateNT(
 IN idNT int,IN tituloNT varchar(30), IN textoNT text,IN descripcionNT varchar(100),IN imagenNT varchar(301),
 IN  FechaCreateNT DATE
)
begin
update noticia set  
    titulo = tituloNT,descripcion = descripcionNT,texto =textoNT,imagen = imagenNT,
    FechaCreate = FechaCreateNT
 where idNoticia = idNT;
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proInsertNT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertNT(
  in idNoticia int, in titulo varchar(30), in descripcion varchar(100),
  in texto text, in imagen varchar(301),
in FechaCreate DATE
)
begin
insert into Noticia values ( idNoticia, titulo, descripcion, texto, imagen, CURDATE());
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proDeleteNT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteNT(in idNT int)
begin
delete from Noticia where  idNoticia = idNT;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proSelectEF*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectEF()
begin
select * from  Enfermedad;
end //
delimiter ;
call proSelectEF();
/*-----------------------------------------------------------------------*/
/*proSelectEFId*/
/*-----------------------------------------------------------------------*/

delimiter //
create procedure proSelectEFId(in id int)
begin
select * from Enfermedad where idEnfermedad=(id);
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proUpdateEF*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proUpdateEF(
 in idEF int,
 in nombreEF varchar(70),
 in estadoEF varchar(10)
)
begin
update Enfermedad set  
    nombreEnfermedad = nombreEF,
estadoEnfermedad = estadoEF
 where idEnfermedad = idEF;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proInsertEF*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertEF(
idEnfermedad int,
     nombreEnfermedad varchar(70),
     estadoEnfermedad varchar(10)
)
begin
insert into Enfermedad values ( idEnfermedad, nombreEnfermedad, estadoEnfermedad);
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proDeleteEF*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteEF(in idEF int)
begin
delete from Enfermedad where  idEnfermedad = idEF;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proHistoriCli*/
/*-----------------------------------------------------------------------*/ 
 delimiter //
create procedure proHistoriCli()
begin
SELECT * FROM HistoriaClinica where idPaciente=idPaciente;
end //
delimiter ;

 
/*-----------------------------------------------------------------------*/
/*proEspecialidadPro*/
/*-----------------------------------------------------------------------*/

delimiter //
create procedure proEspecialidadPro()
begin
SELECT * FROM  EspecialidadProfesional;
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proInsertEsp*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertEsp(in idEspecialidad  int,in nombreEspecialidad  varchar(100),in estadoEspecialidad varchar(70)
)
begin
insert into Especialidad values(idEspecialidad, nombreEspecialidad, estadoEspecialidad );
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proUpdateEsp*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proUpdateEsp(in idEsp int,in nombreEspecialidadEsp Varchar(100),in estadoEspecialidadEsp Varchar(70))
begin
update Especialidad set  nombreEspecialidad = nombreEspecialidadEsp,estadoEspecialidad = estadoEspecialidadEsp
where idEspecialidad = idEsp;
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proSelectEspId*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectEspId(in id int)
begin
select * from Especialidad where idEspecialidad=(id);
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proSelectEsp*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectEsp()
begin
select * from  Especialidad;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proDeleteEsp*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteEsp(in idEsp int)
begin
delete from Especialidad where  idEspecialidad = idEsp;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proSelectCT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectCT()
begin
select * from Citaa where estadoCita="Activo";
end //
delimiter ;
delimiter //
create procedure proSelectCTPro()
begin
select * from CitaProp where estadoCita="Activo";
end //
delimiter ;

delimiter //
create procedure proSelectCTfisio(in idfisio int)
begin
select * from Citaa where idProfesionalFK=(idfisio);
end //
delimiter ;


delimiter //
create procedure proSelectCTPaci(in idPac int)
begin
select * from Citaa where idpacienteFK=(idPac) AND estadoCita='Activo';
end //
delimiter ;



/*-----------------------------------------------------------------------*/
/*proSelectCTId*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectCTId(in id int)
begin
select * from citaa where idCita=(id);
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*proUpdateCT*/
/*-----------------------------------------------------------------------*/
delimiter // 
create procedure proUpdateCT(
 in idCT  int,
 in contenidoCT varchar(100),
 in fechaCitaCT TIMESTAMP,
 in estadoCitaCT varchar(10),  
 in idpacienteFKCT INT,
 in idProfesionalFKCT INT,
 in idEspecialidadFKCT INT,
 in AsistenciaCT varchar(2)
)
begin
update cita set  contenido = contenidoCT, fechaCita = fechaCitaCT, estadoCita = estadoCitaCT,
    idpacienteFK = idpacienteFKCT, idProfesionalFK = idProfesionalFKCT, idEspecialidadFK = idEspecialidadFKCT,
    Asistencia = AsistenciaCT
 where idCita = idCT;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proInsertCT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertCT(
in idCita int,
in contenido varchar(100),
in fechaCita TIMESTAMP, 
in estadoCita varchar(10),
in idpacienteFK int,
in idProfesionalFK int,
in idEspecialidadFK int,
in Asistencia varchar(12)
)
begin
insert into cita values ( idCita, contenido, fechaCita, estadoCita,
idpacienteFK, idProfesionalFK,idEspecialidadFK,Asistencia);
end //
delimiter ;

select * from cita;

/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertPCC(
    idPaciente  int,
    peso  varchar(10),
    estatura double,
    estadoPaciente varchar(10),
    antecedentesFamiliares varchar(100),
    idUsuarioFK INT
)
begin 
insert into Paciente values ( idPaciente, peso, estatura, estadoPaciente, antecedentesFamiliares, idUsuarioFK );
end //
delimiter ;
/*proInsertCT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proInsertCTA(in idCita int,in contenido varchar(100),in fechaCita datetime,
in estadoCita varchar(10),in idpacienteFK int,in idProfesionalFK int,in idEspecialidadFK int,in Asistencia varchar(2)
)
begin
insert into cita values ( idCita, contenido, fechaCita,"Inactivo",
idpacienteFK, idProfesionalFK,idEspecialidadFK,Asistencia);
end //
delimiter ;
select * from cita;
/*-----------------------------------------------------------------------*/
/*proDeleteCT*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteCT(in idCT int)
begin
delete from cita where  idCita = idCT;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proSelectVPE*/
/*-----------------------------------------------------------------------*/

delimiter //
create procedure proSelectVPE()
begin
select * from VistaPacienteEnfermedad where idPacienteFk = idPaciente;
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*Solicitud CITA*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proSelectCTS()
begin
select * from Citaa where estadoCita="Inactivo";
end //
delimiter ;


delimiter //
create procedure proSelectCTAS()
begin
select * from Citaa where estadoCita="Activo" AND Asistencia="Si";
end //
delimiter ;

/*****************************************************************/
delimiter //
create procedure proSelectCTPd()
begin
select * from Citaa where estadoCita="Activo" AND Asistencia="Pendiente";
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*****************************************************************/
delimiter //
create procedure proSelectCTCl()
begin
select * from Citaa where estadoCita="Activo" AND Asistencia="No";
end //
delimiter ;

/*-----------------------------------------------------------------------*/
/*-----------------------------------------------------------------------*/


delimiter //
create procedure ConsultaPaciente()
begin
		SELECT * FROM VistaPacienteTT;
end //
delimiter ;

/****************************************************************************************/
delimiter //
create procedure getUsuarioProfesional()
begin
select u.idUsuario,concat(u.nombreUser," ",u.apellidoUser) as nombreUser from Usuario as u where tipoRol='Fisioterapeuta' AND estadoUser='Activo';
end //
delimiter ;

/****************************************************************************************/

delimiter //
create procedure VistaPacienteTTt()
begin
select * from VistaPacienteTTt;
end //
delimiter ;

delimiter //
create procedure VistaPacienteTT()
begin
select * from VistaPacienteTT;
end //
delimiter ;


/**********************AGENDA******************************************************************/


delimiter //
create procedure proSelectAg()
begin
select * from Agenda;
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proSelectFSId*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proSelectAgendaId(in idAgenda int)
begin
select * from Agenda where idAgenda=(idAgenda);
end //
delimiter ;
/*------------------------------------------------------------------*/
/*proUpdateFS*/
/*------------------------------------------------------------------*/
delimiter //
	create procedure proUpdateAg(
	in  idAgendaAg  int, in  titleAg  Varchar(30), in DescripcionAg text,
	in HoraAg datetime , in idProfesionalFKAg  int)
	begin
	update Agenda set  
	title = titleAg, Descripcion = DescripcionAg, Hora = HoraAg,
	idProfesionalFK =idProfesionalFKAg
	 where idAgenda = idAgendaAg;
	end //

	delimiter ;
    

/*------------------------------------------------------------------*/
/*proInsertFS*/
/*------------------------------------------------------------------*/
delimiter //
create procedure proInsertAg(
in idAgenda int, in title  Varchar(30), in Descripcion text,
in Hora datetime , in idProfesionalFK  int)
begin
insert into Agenda values (idAgenda, title, Descripcion, Hora, idProfesionalFK);
end //
delimiter ;
/*-----------------------------------------------------------------------*/
/*proDeleteFS*/
/*-----------------------------------------------------------------------*/
delimiter //
create procedure proDeleteAg(in idAg int)
begin
delete from Agenda where  idAgenda = idAg;
end //
delimiter ;


delimiter //
create procedure getPF()
begin
select*from getPF;
end //
delimiter ;

delimiter //
create procedure proSelectAgfisio(in idfisio int)
begin
select * from Agenda where idProfesionalFK=(idfisio);
end //
delimiter ;

delimiter //
create procedure proDeleteEnf(in idpac int)
begin
delete from paciente_enfermedad where  id = idpac;
end //
delimiter ;




SELECT p.idPaciente,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser,p.estadoPaciente
FROM Usuario as u
INNER JOIN paciente as p on  p.idUsuarioFK=u.idUsuario
left JOIN cita as c on  p.idpaciente=c.idpacienteFK
where estadoUser = 'Activo' AND estadoPaciente ='Activo' 
group by idPaciente
