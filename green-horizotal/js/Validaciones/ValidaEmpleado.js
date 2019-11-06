async function ValidaEmpleado() {
    var dui = await ValidaDui();
    var nombres = await ValidaNombres();
    var apellidos = await ValidaApellidos();
    var telefono = await ValidaTelefono();
    var direccion = await ValidaDireccion();
    var cargo = await Validacargo();
    if (dui == 0 && nombres == 0 && apellidos == 0 && telefono == 0 && direccion && cargo == 0) {
        $('#guardarCliente').submit();
    };
}

function validaDui() {

    if ($('#duii').val().length != 10) {
        notaError("¡El DUI debe contener 9 dígitos!");
        return true;
    } else if ($('#duii').val().trim() == "") {
        notaError("¡El DUI es obligatorio!");
        return true;
    } else {
        var param = {
            nrc: $('#duii').val(),
            bandera: "duiiC"
        };

        return $.ajax({
            data: param,
            url: "/Funesi/notika/green-horizotal/Controladores/EmpleadoE.php",
            method: "post",
            success: function (data) {
                if (data == 0) {
                    return true;
                } else {
                    notaError("¡El DUI ingresado ya ha sido registrado!");
                    return false;
                }
            }
        });
    }

}

function ValidaNombres() {

    if ($('#nombre').val().trim() == "") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }

    return true;
}

function ValidaApellidos() {

    if ($('#apellido').val().trim() == "") {
        notaError("¡El apellido es obligatorio!");
        return false;
    }

    return true;
}

function ValidaTelefono() {

    if ($('#telfo').val().length != 9) {
        notaError("¡El teléfono debe contener 8 dígitos!");
        return true;
    } else if ($('#telfo').val().trim() == "") {
        notaError("¡El teléfono es obligatorio!");
        return true;
    } else {
        var param = {
            telefono: $('#telfo').val(),
            bandera: "telefonoC"
        };

        return $.ajax({
            data: param,
            url: "/Funesi/notika/green-horizotal/Controladores/EmpleadoE.php",
            method: "post",
            success: function (data) {
                if (data == 0) {
                    return true;
                } else {
                    notaError("¡El teléfono ingresado ya ha sido registrado!");
                    return false;
                }
            }
        });
    }

}

function ValidaDireccion() {

    if ($('#direcci').val().trim() == "") {
        notaError("¡La dirección es obligatorio!");
        return false;
    }

    return true;
}

function Validacargo() {

    if ($('#cargoE').val().trim() == "") {
        notaError("¡Al menos un beneficiario es Obligatorio!");
        return false;
    }

    return true;
}