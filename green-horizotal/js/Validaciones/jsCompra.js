function mostraCompra(fecha,proveedor,factura,producto,categoria,tipo,cantidad,unitario) {
    var cate =["Equipo","Feretro","Comestibles","Desechables"];
    $("#fechac").val(fecha);
    $("#proveedorc>option[value="+proveedor+"]").attr("selected",true);
    $("#facturac").val(factura);
    $("#productoc").val(producto);
    $("#categoriac").val(cate[parseInt(categoria)-1]);
    $("#tipoc").val(tipo);
    $("#cantidadc").val(cantidad);
    $("#unitarioc").val(unitario);
}