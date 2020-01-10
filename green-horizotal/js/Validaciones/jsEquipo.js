function mostraEquipo(codigo, nombre,categoria,stock,caracte) {
    var cate =["Cafetera","Candelabros","Cortinas","Crucifijos","Floreros","Lámparas Eléctricas","Sillas"];
    $("#codigo").val(codigo);
    $("#nombre").val(nombre);
    $("#categoria").val(cate[parseInt(categoria)-1]);
    $("#stock").val(stock);
    $("#caracte").val(caracte);
}

function editarEquipo(codigo, nombre,categoria,stock,caracte,idEquipo) {
    var cate =["Cafetera","Candelabros","Cortinas","Crucifijos","Floreros","Lámparas Eléctricas","Sillas"];
    $("#codigoe").val(codigo);
    $("#nombree").val(nombre);
    $("#categoriae").val(cate[parseInt(categoria)-1]);
    $("#stocke").val(stock);
    $("#caractee").val(caracte);
    $("#idEquipo").val(idEquipo);
}