<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba de validación con JS</title>
  <script>
    
  function validarFormulario(){
 
    var txtNombre = document.getElementById('nombre').value;
    var txtEdad = document.getElementById('edad').value;
    var txtCorreo = document.getElementById('correo').value;
    var txtFecha = document.getElementById('fecha').value;
    var cmbSelector = document.getElementById('selector').selectedIndex;
    var chkEstado = document.getElementById('checkBox');
    var rbtEstado = document.getElementsByName('radioButton');
 
    var banderaRBTN = false;
 
    //Test campo obligatorio
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
      alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
 
    //Test edad
    if(txtEdad == null || txtEdad.length == 0 || isNaN(txtEdad)){
      alert('ERROR: Debe ingresar una edad');
      return false;
    }
 
    //Test correo
    if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
      alert('ERROR: Debe escribir un correo válido');
      return false;
    }
 
    //Test fecha
    if(!isNaN(txtFecha)){
      alert('ERROR: Debe elegir una fecha');
      return false;
    }
 
    //Test comboBox
    if(cmbSelector == null || cmbSelector == 0){
      alert('ERROR: Debe seleccionar una opcion del combo box');
      return false;
    }
 
    //Test checkBox
    if(!chkEstado.checked){
      alert('ERROR: Debe seleccionar el checkbox');
      return false;
    }
 
    //Test RadioButtons
    for(var i = 0; i < rbtEstado.length; i++){
      if(rbtEstado[i].checked){
        banderaRBTN = true;
        break;
      }
    }
    if(!banderaRBTN){
      alert('ERROR: Debe elegir una opción de radio button');
      return false;
    }
 
    return true;
  }
 
  </script>
</head>
<body>
  <form action="" onsubmit="return validarFormulario()">
    <label for="nombre">
      <span>Nombre:</span>
    </label>
    <input id="nombr" name="nombr" type="text">
    
    <br><br>
 
    <label for="edad">
      <span>Edad:</span>
    </label>
    <input id="edad" name="edad" type="text">
    
    <br><br>
 
    <label for="correo">
      <span>Correo electrónico:</span>
    </label>
    <input id="correo" name="correo" type="text">
 
    <br><br>
    
    <label for="fecha">
      <span>Fecha:</span>
    </label>
    <input id="fecha" name="fecha" type="date">
 
    <br><br>
 
    <label for="selector">
      <span>Selecciona una opción:</span>
    </label>
    <select id="selector" name="selector">
      <option value="">Valor por defecto</option>
      <option value="1">Un oso</option>
      <option value="2">Dos lobos</option>
      <option value="3">Tres dragones</option>
    </select>
 
    <br><br>
 
    <label for="checkBox">
      <span>Un checkbox:</span>
    </label>
    <input id="checkBox" name="checkBox" type="checkbox"> Haz clic en mí
    
    <br><br>
 
    <label for="radioButton">
      <span>Selecciona una opción:</span>
    </label><br>
    <input type="radio" id="radioButton" name="radioButton"> Un botón<br>
    <input type="radio" id="radioButton" name="radioButton"> Otro botón<br>
    <input type="radio" id="radioButton" name="radioButton"> Mas botones
    
    <br><br>
 
    <input type="submit" value="Submit">
 
  </form>
</body>
</html>