$(document).ready(function() {
mostrar();
console.log('jquery is working!');

$('#detalle').submit(e => {
    e.preventDefault();
    const postData = {
      fecha:$('#fecha').val(),
      x:$('#prove').val(),
      factura:$('#factura').val(),
      name: $('#prod').val(),
      description: $('#cant').val()
    };
    //solo cuando necesito  solo agregar
    $.post('aggDetalle.php',postData,function(response){
      console.log(response);
     // $('#detalle').trigger('reset');
     mostrar();
    });
    //fin
    

  });

function mostrar() {
    $.ajax({
      url: 'listaProducto.php',
      type: 'GET',
      success: function(response) {
        const productos = JSON.parse(response);
        let template = '';
        productos.forEach(producto => {
          template += `
                  <tr factura="${producto.id}">
                  <td>${producto.producto}</td>
                  <td>
                    ${producto.cantidad} 
                  </td>
                  <td>${producto.precio}</td>
                  <td>${producto.total}</td>
                  <td>
                    <button class="prod-delete btn btn-danger">
                     Delete 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#tabla-ok').html(template);
      }
    });
  }

  // Delete a Single Task
  $(document).on('click', '.prod-delete', (e) => {
  
   // if(confirm('Are you sure you want to delete it?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
     const id = $(element).attr('factura');
      $.post('prod-delete.php', {id}, (response) => {
     //   console.log(response);
        mostrar();
      });
    //}
  });

  //*******para finalizar la compra limpiare detallecompra
 

  //***

  });
