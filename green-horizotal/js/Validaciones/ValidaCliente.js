async function ValidaCliente(){
    var dui= await ValidaDui(); 
    var nombres= await ValidaNombre();
    var apellidos= await ValidaApellido(); 
    var telefono= await ValidaTelefono();
    var direccion= await ValidaDireccion(); 
    var benef1= await ValidaBenefi1(); 
    var benef2= await ValidaBenefi1(); 
    var benef3= await ValidaBenefi1();   
    if (dui==0 && nombres==0 && apellidos==0 && telefono==0 && direccion  && benef1==0 && benef2==0 && benef3==0) {
        $('#guardarCli').submit();
    };      
}

function validarDui(){

    if ($('#duii').val().length!=10) {
        notaError("¡El DUI debe contener 9 dígitos!");
        return true;
    }
    else if ($('#duii').val().trim()=="") {
    	notaError("¡El DUI es obligatorio!");
    	return true;
    }
    else{
        var param = {
            nrc: $('#duii').val(),
            bandera: "duiiC"
        };

        return $.ajax({
            data: param,
            url:"/Funesi/notika/green-horizotal/Controladores/ClienteC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("¡El DUI ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }

    }