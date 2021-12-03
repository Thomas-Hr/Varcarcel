function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var estadoPaciente = document.Form.estadoPaciente.value;
    var peso = document.Form.peso.value;
    var estatura = document.Form.estatura.value;
    var antecedentesFamiliares = document.Form.antecedentesFamiliares.value;
    
    var estadoPacienteErr = pesoErr = estaturaErr = antecedentesFamiliaresErr = true;
    
    /*Grupo Estado Paciente*/
    if(estadoPaciente == "Seleccione...") {
        printError("estadoPacienteErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("estadoPaciente");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("estadoPacienteErr", "");
        estadoPacienteErr = false;
        var elem = document.getElementById("estadoPaciente");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    /*Grupo Peso Paciente*/
    if(peso == "") {
        printError("pesoErr", 'Por favor no dejar el campo vacío.');
        var elem = document.getElementById("peso");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^.{2,3}$/;                
        if(regex.test(peso) === false) {
            printError("pesoErr", 'Este campo solo permite números.');
            var elem = document.getElementById("peso");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("pesoErr", "");
            pesoErr = false;
            var elem = document.getElementById("peso");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*Grupo Estatura Paciente*/
    if(estatura == "") {
        printError("estaturaErr", 'Por favor no dejar el campo vacío.');
        var elem = document.getElementById("estatura");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^.{2,3}$/;                
        if(regex.test(estatura) === false) {
            printError("estaturaErr", 'Este campo solo permite números.');
            var elem = document.getElementById("estatura");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("estaturaErr", "");
            estaturaErr = false;
            var elem = document.getElementById("estatura");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*Grupo Antecedentes Familiares*/
    if(antecedentesFamiliares == "") {
        printError("antecedentesFamiliaresErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("antecedentesFamiliares");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ0-9 !¡¿?""$%°.,:;<>/-]{1,200}$/;                
        if(regex.test(antecedentesFamiliares) === false) {
            printError("antecedentesFamiliaresErr", "Por favor verifique si escribio bien sus apellidos");
            var elem = document.getElementById("antecedentesFamiliares");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("antecedentesFamiliaresErr", "");
            antecedentesFamiliaresErr = false;
            var elem = document.getElementById("antecedentesFamiliares");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    if((estadoPacienteErr || pesoErr || estaturaErr || antecedentesFamiliaresErr) == true) {
       return false;
     
    } 
};