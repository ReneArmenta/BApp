 var total=0;
        var stotal=0;
        var costoEnvio=30;
        
        
        pedidos = {
            
            "articulo":
            
            [
                {
                nombre_articulo:"Cerveza 1",
                cantidad:"4",
                precio:"15.20"
            },
            
            {
                nombre_articulo:"Carbón 1kg",
                cantidad:"1",
                precio:"100"
            },
            
            
               {
                nombre_articulo:"Doritos",
                cantidad:"3",
                precio:"20"
            },
                {
                nombre_articulo:"Doritos",
                cantidad:"3",
                precio:"20"
            },
                {
                nombre_articulo:"Doritos",
                cantidad:"3",
                precio:"20"
            },
               
            ]
        }
        
        
    
        for(var i = 0; i < pedidos.articulo.length; i++){
            $("#ticket_content").append("<div class='row'><div class='col-6'><h5 class='nom-art'>" + pedidos.articulo[i].nombre_articulo + "</h5></div><div class='col-2'><h5 class='cant-art'>" + pedidos.articulo[i].cantidad +"</h5></div><div class='col-1'><h5 class='precio-art'>"+" $"+ pedidos.articulo[i].precio +"</h5></div>  </div>")
            stotal=stotal+pedidos.articulo[i].cantidad * pedidos.articulo[i].precio;  
            
        }
        total= stotal+costoEnvio;
        
        $("#s_totals").append("<div class='row'><h5 class='nom-art'>" +"$" +stotal + "</h5></div>");
        $("#costo_envio").text("$" + costoEnvio + ".00");
        $("#Totals").append("<p class='nom-art'>" +"$" +total + "</p>");