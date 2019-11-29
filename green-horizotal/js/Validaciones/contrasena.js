function contrasena(obj,e,valor){
    tecla = (document.all) ? e.keyCode : e.which;
    val = tecla;//valor en ascii
    tecla = String.fromCharCode(tecla);
    aux = false;//bandera
  
      if(valor == ''){
      if((val > 47 && val < 58) || (val > 64 && val < 91) || (val > 96 && val < 123)){
        aux = true;
      }
    }else if(valor[0] >= 0 || valor[0] >= '0'){
      if((val > 47 && val < 58) || (val > 64 && val < 91) || (val > 96 && val < 123)){//poner rangos de letras 
        if(valor.length < 8){
          aux = true;
        }   
      }
    }
    
    var tamanio = $('#contra1').val().length + 1;
    if( tamanio < 6){
      $('#mensajito1').text("Debe contener al menos 6 carácteres");
    }else{
      $('#mensajito1').text("");
    }
    return aux;
  }

  function contrasena2(obj,e,valor){
 
    var confirmar = $('#contra1').val();
    var contrasena = $('#contra2').val();
  
    console.log(confirmar);
    console.log(contrasena);
    if( confirmar == contrasena){
      $('#mensajito2').text("La contraseña coincide");
    }else{
      $('#mensajito2').text("La contraseña No coincide");
    }
  }