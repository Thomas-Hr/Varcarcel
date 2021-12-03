USE Varcarcel;
/**************************Paciente_enfermedad************************/
CREATE view PacienteEnfermedad as
SELECT pe.idPacienteFk,pe.id,pe.idEnfermedadFK,e.nombreEnfermedad
FROM paciente_enfermedad as pe
INNER JOIN Enfermedad as e on pe.idEnfermedadFK=e.idEnfermedad;

/**************************Historia clinica************************/
CREATE view HistoriaClinica as
SELECT p.idPaciente,p.idUsuarioFk,p.peso,p.estatura,p.antecedentesFamiliares,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.tipoDocumento,u.NumDocumento,u.FechaNacimiento,e.nombreEnfermedad
FROM Paciente as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
INNER JOIN Enfermedad as e on p.idPaciente=e.idEnfermedad;

/**************************VistaPacienteEnfermedad************************/
CREATE view VistaPacienteEnfermedad as
SELECT pe.idPacienteFk,p.idPaciente,pe.idEnfermedadFK, e.nombreEnfermedad
FROM  paciente_enfermedad as pe
INNER JOIN Enfermedad as e on pe.idEnfermedadFk = e.idEnfermedad
INNER JOIN   Paciente as p on pe.idPacienteFk=p.idPaciente;
/**************************EspecialidadProfesional************************/
CREATE view EspecialidadProfesional as
SELECT p.idProfesional,p.idUsuarioFK,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,p.tarjetaProfesional,p.HorasT,e.idEspecialidad,e.nombreEspecialidad,e.estadoEspecialidad,p.estadoMedico
FROM Profesional as p
INNER JOIN Especialidad as e on  e.idEspecialidad=p.idEspecialidadFK
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario;

/******************Profesional****************************************/
create view ViewRolProfesional as
SELECT u.idUsuario,p.idProfesional,p.idUsuarioFK,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser FROM Usuario as u  
INNER JOIN Profesional as p on  p.idUsuarioFK=u.idUsuario
where tipoRol ='Fisioterapeuta';



delimiter //
create procedure getUProfesional()
begin
select *from ViewRolProfesional;
end //
delimiter ;

/*--------------------------------------------------------------------------------------*/



SELECT * From
Especialidad e
INNER JOIN 	profesional as p on  e.idEspecialidad=p.idEspecialidadFK;


/****PACIENTE**************/
CREATE view VistaPaciente as
SELECT u.idUsuario,p.idPaciente, p.idUsuarioFK,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.tipoDocumento,u.NumDocumento,u.correoUser, u.telefono,p.antecedentesFamiliares as anteFam,p.peso,p.estadoPaciente,p.estatura
FROM Paciente as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario;

CREATE view VistaProfesional as
SELECT e.nombreEspecialidad,u.idUsuario,p.idProfesional, p.idUsuarioFK,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.tipoDocumento,u.NumDocumento,u.correoUser, u.telefono,p.estadoMedico,p.tarjetaProfesional,p.idEspecialidadFK,p.HorasT
FROM Profesional as p
INNER JOIN Especialidad as e on  e.idEspecialidad=p.idEspecialidadFK
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario;


CREATE view VistaPacientex as
SELECT p.*, u.*, concat(u.nombreUser," ",u.apellidoUser) AS Nombre
FROM Paciente as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario;
/*Esta vista es para traer el nombre de pacientes en citas*/

CREATE view Vistafisio as
SELECT p.idProfesional,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.tipoDocumento,u.NumDocumento,u.correoUser, u.telefono,p.estadoMedico, nombreEspecialidad
FROM Profesional as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
INNER JOIN Especialidad as e on  p.idEspecialidadFK=e.idEspecialidad;

/******************CITA****************************************/
SELECT p.idProfesional,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser,p.estadoMedico
FROM Profesional as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
INNER JOIN cita as c on  p.idProfesional=c.idProfesionalFK
where estadoUser = 'Activo' AND estadoMedico='Activo';

SELECT p.idPaciente,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.estadoUser,p.estadoPaciente
FROM Usuario as u
INNER JOIN paciente as p on  p.idUsuarioFK=u.idUsuario
INNER JOIN cita as c on  p.idpaciente=c.idpacienteFK
where estadoUser = "Activo" AND estadoPaciente ="Activo" 
group by idPaciente;

create view VistaPacienteTT as
SELECT u.idUsuario,concat(u.nombreUser," ",u.apellidoUser) AS Nombre
FROM Usuario as u
where tipoRol = "Paciente" and estadoUser ="Activo";

CREATE view Citaa as
SELECT *,concat(u.nombreUser," ",u.apellidoUser) AS Nombre
FROM Cita c
INNER JOIN Paciente pa on c.idpacienteFK = pa.idPaciente
INNER JOIN Especialidad e on c.idEspecialidadFK = e.idEspecialidad
INNER JOIN Usuario as u on  pa.idUsuarioFK=u.idUsuario;

CREATE view CitaProp as
SELECT C.*,concat(u.nombreUser," ",u.apellidoUser) AS Nombre, pf.idProfesional
FROM Cita c
INNER JOIN Profesional pf on c.idProfesionalFK = pf.idProfesional
INNER JOIN Especialidad e on c.idEspecialidadFK = e.idEspecialidad
INNER JOIN Usuario as u on  pf.idUsuarioFK=u.idUsuario;

/***********************************************************************************/
/*PACIENTE*/
create view VistaPacienteTTt as
SELECT p.idPaciente,concat(u.nombreUser," ",u.apellidoUser) AS Nombre,u.tipoDocumento,u.NumDocumento,u.correoUser, u.telefono,p.antecedentesFamiliares as anteFam,p.peso,p.estadoPaciente,p.estatura
FROM Usuario as u
INNER JOIN paciente as p on  p.idUsuarioFK=u.idUsuario
where tipoRol = "Paciente" and estadoUser ="Activo"
group by idPaciente;


create view getPF as
SELECT p.idProfesional,concat(u.nombreUser,' ',u.apellidoUser) AS Nombre,u.estadoUser,p.estadoMedico
FROM Profesional as p
INNER JOIN Usuario as u on  p.idUsuarioFK=u.idUsuario
where estadoUser = 'Activo' AND estadoMedico='Activo';



