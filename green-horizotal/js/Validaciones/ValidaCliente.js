async function validarCliente() {
    
    var dui = await validaDui();
    var nombre = await validaNombre();
    var apellido = await validaApellido();
    var telefono = await validaTelefono();
    var direccion = await validaDireccion();
    var beneficiario1 = await validaBenefi1();
    var beneficiario2 = await validaBenefi2();
    if (dui == 0 && nombre == 0 && apellido == 0 && direccion == 0 && telefono == 0 && beneficiario1 == 0 && beneficiario2 == 0) {
      ('#guardarCli').submit();
    }
}


function validaDui() {

    if ($('#duii').val().length != 10) {
        alert("¡El DUI debe contener 9 dígitos!");
        return true;
    } else if ($('#duii').val().trim() == "") {
        alert("¡El DUI es obligatorio!");
        return true;
    }

}

function validaNombre() {

    if ($('#nombre').val().trim() == "") {
        alert("¡El nombre es obligatorio!");
        return false;
    }
    return true;
}

function validaApellido() {

    if ($('#apellido').val().trim() == "") {
        alert("¡El apellido es obligatorio!");
        return false;
    }

    return true;
}

function validaTelefono() {

    if ($('#telfo').val().length != 9) {
        alert("¡El teléfono debe contener 8 dígitos!");
        return true;
    } else if ($('#telfo').val().trim() == "") {
        alert("¡El teléfono es obligatorio!");
        return true;
    }

}

function validaDireccion() {

    if ($('#direcci').val().trim() == "") {
        alert("¡La dirección es obligatorio!");
        return false;
    }

    return true;
}

function validaBenefi1() {

    if ($('#ben1').val().trim() == "") {
        alert("¡Al menos un beneficiario es Obligatorio!");
        return false;
    }

    return true;
}
function validaBenefi2() {

    if ($('#ben1').val().trim() == "") {
        alert("¡Al menos un beneficiario es Obligatorio!");
        return false;
    }

    return true;
}