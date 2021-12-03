function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;

   

}



function validateForm() {

    var nombreUser = document.Form.nombreUser.value;
    var apellidoUser = document.Form.apellidoUser.value;
    var tipoDocumento = document.Form.tipoDocumento.value;
    var NumDocumento = document.Form.NumDocumento.value;
    var FechaNacimiento = document.Form.FechaNacimiento.value;
    var correoUser = document.Form.correoUser.value;
    var telefono = document.Form.telefono.value;
    var direccionUser = document.Form.direccionUser.value;
    var estadoUser = document.Form.estadoUser.value;
    var tipoRol = document.Form.tipoRol.value;
    var nombreUserErr = apellidoUserErr = tipoDocumentoErr = NumDocumentoErr = FechaNacimientoErr = correoUserErr  = telefonoErr = direccionUserErr = tipoRolErr = estadoUserErr = true;
    
    /*Grupo Nombres*/
    if(nombreUser == "") {
        printError("nombreUserErr", 'Por favor no dejar el campo vacío');
        var elem = document.getElementById("nombreUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;                
        if(regex.test(nombreUser) === false) {
            printError("nombreUserErr", 'Por favor verifique si escribio bien sus nombres');
            var elem = document.getElementById("nombreUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("nombreUserErr", "");
            nombreUserErr = false;
            var elem = document.getElementById("nombreUser");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    /*Grupo Apellidos*/
    if(apellidoUser == "") {
        printError("apellidoUserErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("apellidoUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;                
        if(regex.test(apellidoUser) === false) {
            printError("apellidoUserErr", "Por favor verifique si escribio bien sus apellidos");
            var elem = document.getElementById("apellidoUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("apellidoUserErr", "");
            apellidoUserErr = false;
            var elem = document.getElementById("apellidoUser");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*Grupo Tipo Documento*/
     if(tipoDocumento == "Seleccione...") {
        printError("tipoDocumentoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("tipoDocumento");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("tipoDocumentoErr", "");
        tipoDocumentoErr = false;
        var elem = document.getElementById("tipoDocumento");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

    /*Grupo Numero de Documento*/
    if(NumDocumento == "") {
        printError("NumDocumentoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("NumDocumento");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^\d{6,10}$/;                
        if(regex.test(NumDocumento) === false) {
            printError("NumDocumentoErr", "Verifique su número de Documento");
            var elem = document.getElementById("NumDocumento");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("NumDocumentoErr", "");
            NumDocumentoErr = false;
            var elem = document.getElementById("NumDocumento");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*Grupo Fecha Nacimiento*/
    if(FechaNacimiento == "") {
        printError("FechaNacimientoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("FechaNacimiento");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[0-9]{4}-[0-9]{2}-[0-9]{2}/;                
        if(regex.test(FechaNacimiento) === false) {
            printError("FechaNacimientoErr", "Establezca un fecha válida");
            var elem = document.getElementById("FechaNacimiento");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("FechaNacimientoErr", "");
            FechaNacimientoErr = false;
            var elem = document.getElementById("FechaNacimiento");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    
    /*Grupo Correo Electrónico*/

    if(correoUser == "") {
        printError("correoUserErr", "Por favor no dejar el campo vacío");
         var elem = document.getElementById("correoUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(correoUser) === false) {
            printError("correoUserErr", "Por favor ingrese un correo valido");
            var elem = document.getElementById("correoUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("correoUserErr", "");
            correoUserErr = false;
             var elem = document.getElementById("correoUser");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    }

    /*Grupo Teléfono*/
    if(telefono == "") {
        printError("telefonoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("telefono");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^\d{7,12}$/;
        if(regex.test(telefono) === false) {
            printError("telefonoErr", "Verifique su numero de Teléfono o celular");
            var elem = document.getElementById("telefono");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("telefonoErr", "");
            telefonoErr = false;
            var elem = document.getElementById("telefono");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }
    
    /*Grupo Direccion*/

    if(direccionUser == "") {
        printError("direccionUserErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("direccionUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z0-9 ]+$/;
        if(regex.test(direccionUser) === false) {
            printError("direccionUserErr", "Por favor para validar este campo solo se permiten números y letras");
            var elem = document.getElementById("direccionUser");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("direccionUserErr", "");
            direccionUserErr = false;
            var elem = document.getElementById("direccionUser");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }

    /*Grupo Estado Usuario*/
    if(estadoUser == "Seleccione...") {
        printError("estadoUserErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("estadoUser");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("estadoUserErr", "");
        estadoUserErr = false;
        var elem = document.getElementById("estadoUser");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
  

    /*Grupo Tipo Rol*/
    if(tipoRol == "Seleccione...") {
        printError("tipoRolErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("tipoRol");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("tipoRolErr", "");
        tipoRolErr = false;
        var elem = document.getElementById("tipoRol");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
   
    

    if((nombreUserErr || apellidoUserErr || tipoDocumentoErr || correoUserErr || NumDocumentoErr || FechaNacimientoErr || telefonoErr || direccionUserErr ||estadoUserErr || tipoRolErr) == true) {
       return false;
     
    } 
};