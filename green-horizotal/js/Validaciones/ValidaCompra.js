function agregar() {
    var cantidad = $('#cantidadi').val();
    var precio = $('#precioi').val();
    //var precioventa = $('#precioventa').val();
    var obtenerC = $("#catei").find('option:selected');
    var obtenerP = $("#productoi").val();
    var categoriaId = obtenerC.val();
    var categoriaText = obtenerC.text();
    var subtotal = parseFloat(cantidad) * parseFloat(precio);
    var html = '<tr id="f' + obtenerP + '"><td>' + cantidad + '</td>';
    html = html + '<td>' + obtenerP + '</td>';
    html = html + '<td>' + precio + '</td>';
    // html = html+'<td>'+precioventa+'</td>';
    html = html + '<td>' + parseFloat(subtotal).toFixed(2) + '</td>';
    html = html + '<td>';
    html = html + '<input type="hidden" name="cantidad_Com[]" value="' + cantidad + '"/>';
    html = html + '<input type="hidden" name="punitario_Com[]" value="' + precio + '"/>';
    // html = html+'<input type="hidden" name="precio_DVen[]" value="'+precioventa+'"/>';
    html = html + '<button title="Eliminar" type="button" class="btn btn-danger fa fa-trash" onclick="eliminar(' + obtenerP + ',' + subtotal + ');"></button></td></tr>';

}

function eliminar(id,subtotal){
    var acumulado = parseFloat($('#total').val());
    acumulado = acumulado - subtotal;
    $('#total').val(parseFloat(acumulado).toFixed(2));
    $('#f'+id).remove();
    console.log(id);
    var indice = productosagregados.indexOf(""+id+"");
    productosagregados.splice(indice,1);
    console.log(productosagregados);
}