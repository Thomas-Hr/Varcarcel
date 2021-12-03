function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateFormNT() {

    var titulo = document.Form.titulo.value;
    var descripcion = document.Form.descripcion.value;
    var texto = document.Form.texto.value;
    var imagen = document.Form.imagen.value;
        
    var tituloErr = descripcionErr = textoErr = imagenErr = true;
    
    /*Grupo Titulo*/
    if(titulo == "") {
        printError("tituloErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("titulo");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ0-9 !¡¿?""$%°.,:;<>-]{1,200}$/;                
        if(regex.test(titulo) === false) {
            printError("tituloErr", "Ups parace que excedió el limite de caracteres o verifique no hayan caracteres diferentes a estos [solo se Permiten letras numeros y [!¡¿?$%°.,:;<>-]]");
            var elem = document.getElementById("titulo");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("tituloErr", "");
            tituloErr = false;
            var elem = document.getElementById("titulo");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    /*Grupo Descripcion*/
    if(descripcion == "") {
        printError("descripcionErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("descripcion");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ0-9 !¡¿?""$%°.,:;<>-]{1,300}$/;                
        if(regex.test(descripcion) === false) {
            printError("descripcionErr", "Ups parace que excedió el limite de caracteres o verifique no hayan caracteres diferentes a estos [solo se Permiten letras numeros y [!¡¿?$%°.,:;<>-]]");
            var elem = document.getElementById("descripcion");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("descripcionErr", "");
            descripcionErr = false;
            var elem = document.getElementById("descripcion");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

/*Grupo Texto*/
   if(texto == "") {
        printError("textoErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("texto");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-ZÀ-ÿ0-9 !¡¿?""$%°.,:;<>-]{1,600}$/;                
        if(regex.test(texto) === false) {
            printError("textoErr", "Ups parace que excedió el limite de caracteres o verifique no hayan caracteres diferentes a estos [solo se Permiten letras numeros y [!¡¿?$%°.,:;<>-]]");
            var elem = document.getElementById("texto");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("textoErr", "");
            textoErr = false;
            var elem = document.getElementById("texto");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
/*Grupo Imagen*/
    if(imagen == "") {
        printError("imagenErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("imagen");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {/*/.[jpeg|jpg|png]$/i      /^[a-zA-Z0-9.]+$/*/
        var regex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;                
        if(regex.test(imagen) === false) {
            printError("imagenErr", "Este campo solo permite formatos .png y jpeg");
            var elem = document.getElementById("imagen");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("imagenErr", "");
            imagenErr = false;
            var elem = document.getElementById("imagen");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }

    /*
     if(imagen == "") {
        printError("imagenErr", "Por favor no dejar el campo vacío");
        var elem = document.getElementById("imagen");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("imagenErr", "");
        imagenErr = false;
        var elem = document.getElementById("imagen");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }*/
    if((tituloErr = descripcionErr = textoErr = imagenErr ) == true) {
       return false;
     
    } 
};