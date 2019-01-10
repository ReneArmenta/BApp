//Funcion que agrega los articulos que el usuario seleccione siempre y cuando no existan en la lista y su cantidad sea mayor a 0, si existe el producto en la lista solo va a actualizar su precio y si existe y su nueva cantidad es igual a cero eliminará el articulo de la lista.
        function save_items() {
            var total = 0;
            if (posicion == 2) {
                $('#cat_productos .item_producto').each(function(i, productos) {
                    var index = pedidos.articulo.findIndex(x => x.nombre_articulo === $(productos).attr("item_name"));

                    if (index == -1) {
                        if ($(productos).attr("item_quantity") != 0) {
                            pedidos.articulo.push({
                                "nombre_articulo": $(productos).attr("item_name"),
                                "cantidad": $(productos).attr("item_quantity"),
                                "precio": $(productos).attr("item_price")
                            });
                        }
                    } else {
                        if ($(productos).attr("item_quantity") != 0) {
                            pedidos.articulo[index].cantidad = $(productos).attr("item_quantity");
                        } else {
                            pedidos.articulo.splice(index, 1);
                        }
                    }
                });


            }
            //Imprime el total del pedido en el footer
            $(pedidos.articulo).each(function(i, productos) {
                total += productos.cantidad * productos.precio;
            });
            $("#precio_total").text("$ " + total);
            total = 0;
        }