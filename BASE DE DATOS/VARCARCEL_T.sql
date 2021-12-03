CREATE DATABASE Varcarcel;
    USE Varcarcel;

/*-----------------------------------------------------------------*/
/*USUARIO*/
/*select * from Usuario;
select * from paciente;
select * from profesional;
DROP DATABASE Varcarcel
*/


 /*-----------------------------------------------------------------*/
CREATE TABLE Usuario(
    idUsuario int auto_increment NOT NULL,
    nombreUser varchar(40) NOT NULL,
    apellidoUser varchar(40) NOT NULL,
    tipoDocumento varchar(30) NOT NULL,
    NumDocumento varchar(14) NOT NULL unique,
    FechaNacimiento date not NULL,
    correoUser varchar(70) NOT NULL unique,
    contrasena varchar(40) NOT NULL,
	telefono varchar(10) NOT NULL,
    direccionUser varchar(50) NOT NULL,
    estadoUser varchar(10) NOT NULL,
    tipoRol varchar(25) NOT NULL,
    primary key(idUsuario)
    );

   
/*-----------------------------------------------------------------*/
/*Especialidad
/*-----------------------------------------------------------------*/
CREATE TABLE Especialidad(
     idEspecialidad int auto_increment NOT NULL,
     nombreEspecialidad Varchar(100) NOT NULL,
     estadoEspecialidad Varchar(70) NOT NULL,
     primary key(idEspecialidad)
     );
/*-----------------------------------------------------------------*/
/*PROFECIONAL
/*-----------------------------------------------------------------*/

CREATE TABLE Profesional(
    idProfesional int auto_increment NOT NULL,
    estadoMedico Varchar(500) not null,
    tarjetaProfesional varchar(8) not null,
    idUsuarioFK  int NOT NULL,
    idEspecialidadFK int NOT NULL,
    HorasT time not null,
    primary key(idProfesional),
	foreign key(idUsuarioFK) references Usuario(idUsuario) on delete cascade,
    foreign key(idEspecialidadFK) references Especialidad(idEspecialidad) on delete cascade
    );
  
    
/*-----------------------------------------------------------------*/
/*AGENDA
/*-----------------------------------------------------------------*/
CREATE TABLE Agenda(
    idAgenda int auto_increment NOT NULL,
    title varchar(30) not null,
    Descripcion text not null,
    Hora datetime not null,
    idProfesionalFK int,
    foreign key (idProfesionalFK) references Profesional(idProfesional) on delete cascade,
    primary key(idAgenda)
    );
  
/*-----------------------------------------------------------------*/
/*NOTICIA
/*-----------------------------------------------------------------*/   
CREATE TABLE Noticia(
    idNoticia int auto_increment NOT NULL,
    titulo text NOT NULL,
    descripcion text  NOT NULL,
    texto  text,
    imagen text NOT NULL,
    FechaCreate date NOT NULL,
   
    primary key(idNoticia)
    );
/*-----------------------------------------------------------------*/
/*USUARIO_NOTICIA
/*-----------------------------------------------------------------*/
CREATE TABLE Noticia_Usuario(
	idUsuarioFK int,
	idNoticiaFK int
);
alter table Noticia_Usuario add foreign key (idUsuarioFK)
references Usuario(idUsuario) on delete cascade;
alter table Noticia_Usuario add foreign key (idNoticiaFK)
references Noticia(idNoticia) on delete cascade;
/*-----------------------------------------------------------------*/
/*PACIENTE
/*-----------------------------------------------------------------*/

CREATE TABLE Paciente(
    idPaciente  int auto_increment NOT NULL,
    peso  int(3)  not null,
    estatura int(3) NOT NULL,
    estadoPaciente varchar(10) NOT NULL,
    antecedentesFamiliares varchar(300) NOT NULL,
    idUsuarioFK INT NOT NULL,
    foreign key(idUsuarioFK) references Usuario(idUsuario) on delete cascade,
    primary key(idPaciente)
    );
/*-----------------------------------------------------------------*/

/*-----------------------------------------------------------------*/
/*CITA
/*-----------------------------------------------------------------*/
CREATE TABLE Cita(
    idCita int auto_increment  NULL,
    contenido varchar(100)  NULL,
    fechaCita TIMESTAMP NULL unique,
    estadoCita varchar(10)  NULL,
    idpacienteFK int  NULL,
    idProfesionalFK int  NULL,
    idEspecialidadFK int  NULL,
    Asistencia varchar(12)  null,
    foreign key(idpacienteFK) references Paciente(idpaciente) on delete cascade,
    foreign key(idProfesionalFK) references Profesional(idProfesional) on delete cascade,
    foreign key(idEspecialidadFK) references Especialidad(idEspecialidad) on delete cascade,
    primary key(idCita)
    );
/*-----------------------------------------------------------------*/
/*ENFERMEDAD
/*-----------------------------------------------------------------*/
CREATE TABLE Enfermedad(
    idEnfermedad int auto_increment NOT NULL,
    nombreEnfermedad varchar(70) NOT NULL,
    estadoEnfermedad varchar(10) NOT NULL,
    primary key(idEnfermedad)
    );
/*-----------------------------------------------------------------*/
/*PACIENTE_ENFERMEDAD
/*-----------------------------------------------------------------*/
CREATE TABLE paciente_enfermedad(
    idPacienteFK int,
idEnfermedadFK int,
id int primary key auto_increment 
);
insert into paciente_enfermedad Values ();
alter table paciente_enfermedad add foreign key (idPacienteFK)
references Paciente(idPaciente) on delete cascade;
alter table paciente_enfermedad add foreign key (idEnfermedadFK)
references Enfermedad(idEnfermedad) on delete cascade;
select* from paciente_enfermedad;
select* from paciente;

/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/

  /*USUARIO*/
  /*Administradores 4*/
  
   insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Luisa Fernanda','Ariza Espinel', 'TI', '1014736532', '2004-01-18','Luisa@email.com','LuisaF321', '3102259244','cll 56-89'
    ,'Activo','Administrador');
   
     insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Brian Michaelle','Diaz Sillie', 'CC', '1024604990', '2002-12-20','Bmdiaz09@misena.edu.co','29591697B', '3003467083','TV33 59B 27SUR'
    ,'Activo','Administrador');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Thomas','Huerfano Ramirez', 'CC', '1025456789', '2002-11-17','thuerfano@hotmail.com','123456789', '3142259244','TRV 68A #38-98'
    ,'Activo','Administrador');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Sebastian','Paez Prado', 'TI', '1004776532', '2004-01-18','ppadro@email.com','sebas1234', '321597926','DG 68 sur #37-69'
    ,'Activo','Administrador');
/*Fin de los Administradores*/

/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/

/*Pacientes 5*/
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Juan Miguel','Lopez Aguilera', 'CE', '79757354', '1978-12-18','JMlopez@email.com','JMa123a', '3138805436','AV J. 67-37'
    ,'Activo','Paciente');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Marta Susana','Ramirez Paez', 'CC', '1001078257', '2000-05-14','MarSusa@gmail.com','SasanRa', '3145278941','Cra 45. 54-80'
    ,'Activo','Paciente');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Raul','Lopez ', 'CE', '14278961', '1980-08-18','Rau98m@gmail.com','Rauldbs', '3142789450','AV.98 08-78'
    ,'Activo','Paciente');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Luisa','Martinez', 'CC', '714567892', '2000-04-25','Lui45@gmail.com','12lui25', '3156078941','Cra 89 45-23'
    ,'Activo','Paciente');
   
      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Sebastian','Torres', 'CC', '100457896', '1995-12-25','Seba12@gmail.com','Sebi2546', '3256417895','AV 8. 25-55'
    ,'Activo','Paciente');

/*Fin pacientes*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
/*Fisioterapeutas 5*/

      insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Sofia','Marin', 'CC', '100578964', '1999-07-20','Sofi98@gmail.com','soof45', '3125748963','Cra42 78-14'
    ,'Activo','Fisioterapeuta');
   
     insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Daniela','Ramirez', 'CC', '102552100', '1999-08-20','Danir8@gmail.com','Dass45', '3127896452','Av 14 98-03'
    ,'Activo','Fisioterapeuta');
   
     insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Daniel','Perez', 'CC', '127896547', '2001-03-10','Danieli@gmail.com','danada', '3145708960','Cra 90 52-20'
    ,'Activo','Fisioterapeuta');
   
     insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
    Values ('Julian','Sastoque', 'TI', '100104573', '2005-06-24','Julisq@gmail.com','juli254', '3120789641','Cll 59 09-20'
    ,'Activo','Fisioterapeuta');
   
     insert into Usuario (nombreUser, apellidoUser,tipoDocumento,NumDocumento,FechaNacimiento,correoUser,
contrasena,telefono,direccionUser,estadoUser,tipoRol)
Values ('Nolbeiro','Ariza', 'C.C', '76542789', '1999-07-01','Nolbeme@gmail.com','LD2118', '3134481165','Cr 34 #76-97'
    ,'Activo','Fisioterapeuta');
    select*from Usuario;
       select*from Paciente;
    
    /*Fin Fisios*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
	/*Especialidad*/
    
      insert into Especialidad(nombreEspecialidad,estadoEspecialidad)
    Values ('Traumatología','Activo');
      insert into Especialidad(nombreEspecialidad,estadoEspecialidad)
    Values ('Ortopédia','Activo');
      insert into Especialidad(nombreEspecialidad,estadoEspecialidad)
    Values ('Pediatría','Activo');
      insert into Especialidad(nombreEspecialidad,estadoEspecialidad)
    Values ('Cardiovascular','Activo');
      insert into Especialidad(nombreEspecialidad,estadoEspecialidad)
    Values ('Salud mental y psiquiatría','Activo');

    /*Fin Especialidad*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
	/*Profesional*/

   
    insert into Profesional(estadoMedico,tarjetaProfesional,idUsuarioFK,idEspecialidadFK,HorasT)
    Values ('Activo',80106257,10,1,8);
    insert into Profesional(estadoMedico,tarjetaProfesional,idUsuarioFK,idEspecialidadFK,HorasT)
    Values ('Activo',90106257,11,2,7);
    insert into Profesional(estadoMedico,tarjetaProfesional,idUsuarioFK,idEspecialidadFK,HorasT)
    Values ('Activo',60106267,12,3,8);
    insert into Profesional(estadoMedico,tarjetaProfesional,idUsuarioFK,idEspecialidadFK,HorasT)
    Values ( 'Activo',90106237,13,4,8);

    Select*from profesional;
    
	/*Fin Especialidad*/
/*-----------------------------------------------------------------*/

/*Agenda*/
INSERT INTO Agenda(idAgenda,title,Descripcion, Hora,idProfesionalFK) Values(1,'Nuevas maquinas','Revision de maquinas','2021-11-30 17:15:10',1);
select * from Agenda;
/*-----------------------------------------------------------------*/
	/*enfermedad*/ 

    insert into enfermedad(nombreEnfermedad,estadoEnfermedad)
    Values ('Hemiplejías ', 'Activo');
    insert into enfermedad(nombreEnfermedad,estadoEnfermedad)
    Values ('Esclerosis Múltiple', 'Activo');
    insert into enfermedad(nombreEnfermedad,estadoEnfermedad)
    Values ('Parkinson', 'Activo');
    insert into enfermedad(nombreEnfermedad,estadoEnfermedad)
    Values ('Neuralgias', 'Activo');
    insert into enfermedad(nombreEnfermedad,estadoEnfermedad)
    Values ('parálisis cerebral', 'Activo');
    select*from enfermedad;
    
    /*Fin enfermedad*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
	/*paciente*/ 
    
insert into paciente(peso,estatura,estadoPaciente,antecedentesFamiliares,idUsuarioFK)
    Values ( '77','185','Activo','N/A',5);
insert into paciente(peso,estatura,estadoPaciente,antecedentesFamiliares,idUsuarioFK)
    Values ( '60','1.59','Activo','N/A',6);
insert into paciente(peso,estatura,estadoPaciente,antecedentesFamiliares,idUsuarioFK)
    Values ( '56','165','Activo','Diabetes',7);
insert into paciente(peso,estatura,estadoPaciente,antecedentesFamiliares,idUsuarioFK)
    Values ( '80','1.80','Activo','Obesidad',8);
insert into paciente(peso,estatura,estadoPaciente,antecedentesFamiliares,idUsuarioFK)
    Values ( '72','183','Activo','Parkinson',9);
   
	/*Fin paciente*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
	/*cita*/ 

/*insert into cita(contenido,fechaCita,estadoCita,idPacienteFK,idProfesionalFK, idEspecialidadFK, Asistencia)
    Values ('Cita de Ortopedia','2021-11-12','10:00:00','Activo',1,1,2,'Si');
   
    insert into cita(contenido,fechaCita,estadoCita,idPacienteFK,idProfesionalFK, idEspecialidadFK, Asistencia)
    Values ('Cita de Traumatología','2021-11-12','01:00:00','Activo',2,2,1,'Si');
   
    insert into cita(contenido,fechaCita,estadoCita,idPacienteFK,idProfesionalFK, idEspecialidadFK, Asistencia)
    Values ('Cita de Ortopédia','2021-11-13','10:00:00','Activo',3,3,2,'Si');
   
    insert into cita(contenido,fechaCita,estadoCita,idPacienteFK,idProfesionalFK, idEspecialidadFK, Asistencia)
    Values ('Cita Cardiovascular','2021-11-15','10:30:00','Activo',4,4,4,'Si');
   
    insert into cita(contenido,fechaCita,estadoCita,idPacienteFK,idProfesionalFK, idEspecialidadFK, Asistencia)
    Values ('Cita Cardiovascular','2021-11-24','09:00:00','Activo',5,5,4,'Si');
	
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/   
/*-----------------------------------------------------------------*/ 