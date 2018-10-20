pedidos = {
    "articulo": []
}
$("#Finalizar").click(function () {
    //Borrar la lista del ticket 
    $("#ticket_content, #Totals").empty();
    //manda a llamar la funcion para agregar los articulos al arreglo
    save_items();
    var total = 0;
    var costoEnvio = 30;
    //Toma los articulos del arreglo y los imprime en html para desplegarlos en una lista
    $(pedidos.articulo).each(function (i, productos) {
        $("#ticket_content").append("<div class='row'><div class='col-6'><h5 class='nom-art'>" + productos.nombre_articulo + "</h5></div><div class='col-2'><h5 class='cant-art'>" + productos.cantidad + "</h5></div><div class='col-1'><h5 class='precio-art'>" + " $" + productos.precio + "</h5></div>  </div>");
        //Suma el valor de la variable total mas la cantidad de el producto actual por el precio.
        total += productos.cantidad * productos.precio;
    });
    //Suma el total del pedido mas el envio.
    total += costoEnvio;
    //Imprime los totales
    $("#costo_envio").text("$" + costoEnvio + ".00");
    $("#Totals").append("<p class='nom-art'>" + "$" + total + "</p>");
});
