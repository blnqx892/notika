async function validarEmpleado() {
    var Dui = await validaDui();
    var nombre = await validaNombres();
    var apellido = await validaApellidos();
    var direccion = await validaDireccion();
    var telefono = await validaTelefonos();
    var Cargos = await validaCargo();
    if (Dui== 0 && nombre == 0 && apellido == 0  && direccion == 0 && telefono == 0 && Cargos == 0 ) {
      ('#guardarEmple').submit();
    }
}

function validaDui() {

    if ($('#dui').val().length != 10) {
        alert("¡El DUI debe contener 9 dígitos!");
        return true;
    } else if ($('#dui').val().trim() == "") {
        alert("¡El DUI es obligatorio!");
        return true;
    }

}

function validaNombres() {

    if ($('#nombres').val().trim() == "") {
        alert("¡El nombre es obligatorio!");
        return false;
    }
    return true;
}

function validaApellidos() {

    if ($('#apellidos').val().trim() == "") {
        alert("¡El apellido es obligatorio!");
        return false;
    }

    return true;
}

function validaTelefonos() {

    if ($('#telefono').val().length != 9) {
        alert("¡El teléfono debe contener 8 dígitos!");
        return true;
    } else if ($('#telefono').val().trim() == "") {
        alert("¡El teléfono es obligatorio!");
        return true;
    }

}

function validaDireccion() {

    if ($('#direccion').val().trim() == "") {
        alert("¡La dirección es obligatorio!");
        return false;
    }

    return true;
}

function validaCargo() {

    if ($('#cargo').val().trim() == "") {
        alert("¡El cargo es Obligatorio!");
        return false;
    }

    return true;
}
