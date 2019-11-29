function mostraUsuario(Dui_Usu, nombre, apellido_Usu , correo,usuario,password, id_tipo, ) {
    $("#usuariov").val(usuario);
    $("#contra1v").val(password);
    $("#nombrev").val(nombre);
    $("#apellidov").val(apellido_Usu);
    $("#correov").val(correo);
    $("#duiv").val(Dui_Usu);
    $("#rolv").val(id_tipo);
}

function editarUsuario(usuario, password, nombre , apellido_Usu, correo, Dui_Usu, id_tipo, ) {
    $("#usuario").val(usuario);
    $("#contra1").val(password);
    $("#nombre").val(nombre);
    $("#apellido").val(apellido_Usu);
    $("#correo").val(correo);
    $("#dui").val(Dui_Usu);
    $("#rol").val(id_tipo);
    //$("#anterior").val(nombresee);
}