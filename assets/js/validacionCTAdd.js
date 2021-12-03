function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var idPacienteFK = document.Form.idPacienteFK.value;
    var fechaCita = document.Form.fechaCita.value;
    var contenido = document.Form.contenido.value;
    var idProfesionalFK = document.Form.idProfesionalFK.value;
    var idEspecialidadFK = document.Form.idEspecialidadFK.value;  
    var Asistencia = document.Form.Asistencia.value;
    var estadoCita = document.Form.estadoCita.value;

    var idPacienteFKErr = fechaCitaErr = contenidoErr = idProfesionalFKErr = idEspecialidadFKErr = AsistenciaErr = estadoCitaErr = true;
    
    /*Grupo Nombre Paciente*/
     if(idPacienteFK == "Seleccione...") {
        printError("idPacienteFKErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("idPacienteFK");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("idPacienteFKErr", "");
        idPacienteFKErr = false;
        var elem = document.getElementById("idPacienteFK");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

     /*Grupo Fecha y hora de la Cita*/
    if(fechaCita == "") {
        printError("fechaCitaErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("fechaCita");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[0-9]{4}-[0-9]{2}-[0-9]{2}/;                
        if(regex.test(fechaCita) === false) {
            printError("fechaCitaErr", "Establezca un fecha válida");
            var elem = document.getElementById("fechaCita");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("fechaCitaErr", "");
            fechaCitaErr = false;
            var elem = document.getElementById("fechaCita");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");  
        }
    }


    /*Grupo Contenido de la Cita*/
    if(contenido == "") {
        printError("contenidoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("contenido");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ0-9 !¡¿?""$%°.,:;<>-]{1,300}$/;                
        if(regex.test(contenido) === false) {
            printError("contenidoErr", "Ups parace que excedió el limite de caracteres o verifique no hayan caracteres diferentes a estos [solo se Permiten letras numeros y [!¡¿?$%°.,:;<>-]]");
            var elem = document.getElementById("contenido");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("contenidoErr", "");
            contenidoErr = false;
            var elem = document.getElementById("contenido");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*Grupo Nombre Profesional*/
     if(idProfesionalFK == "Seleccione...") {
        printError("idProfesionalFKErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("idProfesionalFK");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("idProfesionalFKErr", "");
        idProfesionalFKErr = false;
        var elem = document.getElementById("idProfesionalFK");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    /*Grupo Especialidad*/
     if(idEspecialidadFK == "Seleccione...") {
        printError("idEspecialidadFKErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("idEspecialidadFK");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("idEspecialidadFKErr", "");
        idEspecialidadFKErr = false;
        var elem = document.getElementById("idEspecialidadFK");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    /*Grupo Estado Asistencia*/
     if(Asistencia == "Seleccione...") {
        printError("AsistenciaErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("Asistencia");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("AsistenciaErr", "");
        AsistenciaErr = false;
        var elem = document.getElementById("Asistencia");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    /*Grupo Estado Cita*/
     if(estadoCita == "Seleccione...") {
        printError("estadoCitaErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("estadoCita");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("estadoCitaErr", "");
        estadoCitaErr = false;
        var elem = document.getElementById("estadoCita");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    if((idPacienteFKErr || fechaCitaErr || contenidoErr || idProfesionalFKErr || idEspecialidadFKErr || AsistenciaErr || estadoCitaErr) == true) {
       return false;
     
    } 
};