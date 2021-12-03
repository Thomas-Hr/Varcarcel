function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var idUsuarioFK = document.Form.idUsuarioFK.value;
    var tarjetaProfesional = document.Form.tarjetaProfesional.value;
    var idEspecialidadFK = document.Form.idEspecialidadFK.value;
    var HorasT = document.Form.HorasT.value;
    
    var idUsuarioFKErr = tarjetaProfesionalErr = idEspecialidadFKErr = HorasTErr = true;

     /*Grupo Nombre del Profesional*/
    if(idUsuarioFK == "Seleccione...") {
        printError("idUsuarioFKErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("idUsuarioFK");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("idUsuarioFKErr", "");
        idUsuarioFKErr = false;
        var elem = document.getElementById("idUsuarioFK");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    
    /*Grupo Tarjeta profesional*/
    if(tarjetaProfesional == "") {
        printError("tarjetaProfesionalErr", 'Por favor no dejar el campo vacío');
        var elem = document.getElementById("tarjetaProfesional");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^.[0-9]{6,8}$/;                
        if(regex.test(tarjetaProfesional) === false) {
            printError("tarjetaProfesionalErr", 'Este campo solo permite numeros');
            var elem = document.getElementById("tarjetaProfesional");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("tarjetaProfesionalErr", "");
            tarjetaProfesionalErr = false;
            var elem = document.getElementById("tarjetaProfesional");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
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

    /*Grupo Horas De Trabajo*/
    if(HorasT == "") {
        printError("HorasTErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("HorasT");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/;                
        if(regex.test(HorasT) === false) {
            printError("HorasTErr", "Digite una hora válida.");
            var elem = document.getElementById("HorasT");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("HorasTErr", "");
            HorasTErr = false;
            var elem = document.getElementById("HorasT");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }


    if((idUsuarioFKErr || tarjetaProfesionalErr || idEspecialidadFKErr || HorasTErr) == true) {
       return false;
     
    } 
};