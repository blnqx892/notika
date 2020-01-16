/*$('#formu').submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password == "") {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y contraseña',
        });
        return false;
    } else {
        $.ajax({
            url: "Controladores/Loguear.php",
            type: "POST",
            datatype: "json",
            data: {
                usuario: usuario,
                password: password
            },
            success: function (data) {
                if (data == "null") {
                    Swal.fire({
                        type: 'error',
                        title: 'Usuario y/o Contraseña son incorrectos',
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: 'Conexión Exitosa!!!'+data,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "../green-horizotal/Principal.php";
                        }
                    })
                }
            }
        });
    }
}); */


$('#formu').submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password == "") {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y contraseña',
        });
        return false;
    } else {
        $.ajax({
            url: "Controladores/Loguear.php",
            type: "POST",
            datatype: "json",
            data: {
               usuario: usuario,
                password: password
            },
            success: function (data) {
                if (data == null) {
                    Swal.fire({
                        type: 'error',
                        title: 'Usuario y/o Contraseña son incorrectos',
                    });
                } else {
					if (data == 'exitoo') {
						Swal.fire({
	                        type: 'success',
	                        title: 'Conexión Exitosa!!!',
	                        confirmButtonColor: '#3085d6',
	                        confirmButtonText: 'Ingresar'
	                    }).then((result) => {
	                        if (result.value) {
	                            window.location.href = "/FUNESI/notika/green-horizotal/Principal.php";
	                        }
	                    })
					}
                }
            }
        });
    }
});

function radioSeleccionado(numero){

	if(numero == 1){
		$("#r2").css('background','');
		$("#r1").css('background','green');

		$("#clientesID").css('display','block');//mostrar


	}else{
		$("#r2").css('background','green');
		$("#r1").css('background','');

		$("#clientesID").css('display','none');//ocultar
		
	}
        $("#tiporeporte").val(numero);
}