async function validarProveedor() {
    
    var nombreE = await validaNombreE();
    var Direccion = await validaDireccion();
    var telefono = await validaTelefono();
    var nombreR = await validaNombreR();
    var telefonoR = await validaTelefonoR();
    if ( nombreE == 0 && Direccion == 0 && telefono == 0 && nombreR == 0 && telefonoR == 0) {
      ('#guardarProve').submit();
    }
}



function validaNombreE() {

    if ($('#nomEmp').val().trim() == "") {
        alert("¡El nombre  es obligatorio!");
        return false;
    }
    return true;
}

function validaDireccion() {

    if ($('#dirEmp').val().trim() == "") {
        alert("¡La dirección es obligatorio!");
        return false;
    }

    return true;
}
function validaTelefono() {

    if ($('#telEmp').val().length != 9) {
        alert("¡El teléfono debe contener 8 dígitos!");
        return true;
    } else if ($('#telEmp').val().trim() == "") {
        alert("¡El teléfono es obligatorio!");
        return true;
    }

}



function validaNombreR() {

    if ($('#nomRes').val().trim() == "") {
        alert("¡El nombre de el responsable es obligatorio!");
        return false;
    }

    return true;
}
function validaTelefonoR() {

    if ($('#telRes').val().length != 9) {
        alert("¡El teléfono debe contener 8 dígitos!");
        return true;
    } else if ($('#telRes').val().trim() == "") {
        alert("¡El teléfono de Responsable es obligatorio!");
        return true;
    }

}