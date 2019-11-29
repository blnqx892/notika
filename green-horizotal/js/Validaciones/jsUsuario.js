function mostraUsuario(Dui_Usu, nombre, apellido_Usu , correo,usuario,password, id_tipo, ) {
    $("#usuariov").val(usuario);
    $("#contra1v").val(password);
    $("#nombrev").val(nombre);
    $("#apellidov").val(apellido_Usu);
    $("#correov").val(correo);
    $("#duiv").val(Dui_Usu);
    $("#rolv").val(id_tipo);
}

function editarUsuario(Dui_Usu,nombre,apellido_Usu,correo,usuario,idusu ) {
    $("#dui").val(Dui_Usu);
    $("#nombre").val(nombre);
    $("#apellido").val(apellido_Usu);
    $("#correo").val(correo);
    $("#usuario").val(usuario);
    $("#idusuario").val(idusu);
    
    //$("#anterior").val(nombresee);
}