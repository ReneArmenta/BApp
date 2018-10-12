<html>
    <head>
        <title>BeerApp - Finalizar Pedido</title>
       
        <link rel="stylesheet" href="../Assets/css/estilos.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="
        stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../Assets/css/lib/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body id="body_Pedido">
         <div class="container-fluid bg-primary" id="containerNav">
           <div class="col-12">
             <button class="btn btn-back navbar-btn"  id="btnBack"><i class="fa fa-chevron-left"></i></button>
            </div>
        </div>
    <div id="div_ticket">

   
    <div class="container" id="ticket">
        <div class="container" id="ticket-container">
        
         <div class="row" >
            <div class="col-12">
                <h1>Total del Pedido:</h1>
            </div>
          </div>
          <div class="row" >
                <div class="col-4">
                <h6>Producto</h6>
                </div>
                <div class="col-4">
                    <h6>Cantidad</h6>
                </div>
                <div class="col-3">
                    <h6> Precio</h6>
                </div>  
            </div>
            <div id="ticket_content">
            
            
            </div>
            <div class="row"  >
                
                <div class="container" id="costo-envio">
                     
                    <div class="col-12">
                        <p>Costo Envío: <span id="costo_envio"></span></p>
                    </div>
                    
                  
                      
                </div>
            </div>
        </div>
        
      <div id="ticket-form" class="row justify-content-center align-self- w-100 form animated ">
              
                
            <input type="text" placeholder="¿Con cuanto vas a pagar?" id="input-cantidad" class="input-form">
            <input type="text" placeholder="¿A donde te lo llevamos?" id="input-direccion" class="input-form">     
                
       
  
    </div>
        
        
        
        
        
        
    </div>   
                    
    
        <div id="ticket_summary">
            <div class="contenedor">
                <div class="row">
                    <div class="col-12">
                        <p style="text-align: center; font-size: 20px; font-weight:600; margin-top: -30px;">Total:</p>
                    </div>

                </div>
                <div class="row">
                <div class="col-12">
                        <div id="Totals">
                        </div>  
                    </div>
                </div>
                <button id="btn_order">
                    Finalizar pedido
                </button>
            </div>
            
        </div>
 
             
    </div>
 
    </body>
    
    
    <script src="../Assets/js/login/main-login.js"></script>
    <script>
    
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
        
    </script>
</html>