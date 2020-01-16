function validarfor(){

    var dui = document.getElementsByName("duii")[0].value;
    var nom = document.getElementsByName("nombre")[0].value;
    var ape = document.getElementsByName("apellido")[0].value;
    var tel = document.getElementsByName("telfo")[0].value;
    var dir = document.getElementsByName("direcci")[0].value;
    var ben1 = document.getElementsByName("ben1")[0].value;
    var ben2 = document.getElementsByName("ben2")[0].value;
    var ben3 = document.getElementsByName("ben3")[0].value;
    
    

    
    if ((dui == "") || (nom == "") || (ape == "") || (tel == "") || (dir == "") || (ben1 == "")|| (ben2 == "")|| (ben3 == "")) {  //COMPRUEBA CAMPOS VACIOS
       
        return false;
    }
    
    }