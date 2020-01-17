$(document).ready(function() {
//mostrar();
console.log('jquery is working!');
//************ventas
  $('#detalle').submit(e => {
    e.preventDefault();
    const postData = {
      fecha:$('#fecha').val(),
      numero:$('#recibo').val(),
      paquete:$('#paquete').val(),
      cliente:$('#cliente').val(),
      pago: $('#pago').val()
    };
    //solo cuando necesito  solo agregar
    $.post('controladorVenta.php',postData,function(response){
      console.log(response);
     // $('#detalle').trigger('reset');
    // mostrar();
    //location.reload('listaVenta.php');
    //header("location: /Funesi/notika/green-horizotal/ListaVenta.php");
    window.location.replace("/Funesi/notika/green-horizotal/ListaVenta.php");
    
    });
    //fin
    

  });
  //**************

  function mostrar() {
    $.ajax({
      url: 'listaPaquete.php',
      type: 'GET',
      success: function(response) {
        const paq = JSON.parse(response);
        let template = '';
        paq.forEach(prod => {
          template += `
                  <tr>
                  <td>${prod.nombre}</td>
                  <td>
                    ${prod.ferretero} 
                  </td>
                  <td>
                    ${prod.existencia} 
                  </td>
                  <td>${prod.servicio}</td>
                  <td>${prod.precio}</td>
                  
                  </tr>
                `
        });
        $('#tabla-ok').html(template);
      }
    });
  }

 

  //***

  });