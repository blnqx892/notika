function mostrarEmpleado(dui, nombres, apellidos, direccion, telefono, cargo, fecha) {
    $("#dui").val(dui);
    $("#nombres").val(nombres);
    $("#apellidos").val(apellidos);
    $("#direccion").val(direccion);
    $("#telefono").val(telefono);
    $("#cargo").val(cargo);
    $("#fech").val(fecha);
}

function editarEmpleado(duiee, nombresee, apellidosee, direccionee, telefonoee, cargoee, fechaee, idempleado) {
    $("#duia").val(duiee);
    $("#nombresa").val(nombresee);
    $("#apellidosa").val(apellidosee);
    $("#direcciona").val(direccionee);
    $("#telefonoa").val(telefonoee);
    $("#cargoa").val(cargoee);
    $("#fechaa").val(fechaee);
    $("#idempleado").val(idempleado);
    //$("#anterior").val(nombresee);
}