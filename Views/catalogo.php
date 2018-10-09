<html>
    <head>
        <title>BeerApp - login</title>
       
        <link rel="stylesheet" href="../Assets/css/Catalogo.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="
        stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="view-catalogo" class="container">
          <div id="cabeza">
               <div class="row">
                  <div class="col-9">
                      <button id="btn_return"><label class="fa fa-angle-left" style="font-size:30px; color:white"></label></button>   
                  </div>
                   <div class="col-3">
                       <button id="Finalizar"><p>Finalizar</p></button>
                   </div>
               </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="Busqueda" type="text" placeholder="Buscar">
                    <button id="Btn_buscar"><label class="fa fa-arrow-right" style="font-  size:30px;color:white"></label></button>
                </div>
            </div>
        </div>
        <div id="item_cat" class="container">
            <div class="row">
                <div class="col-6">
                    <div class="item">
                        <img src="../Assets/img/Catalogo/cerveza.png">
                        <div><p>Cervesa</p></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <img src="../Assets/img/Catalogo/coctel%20(3).png">
                        <div><p>Coolers</p></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                       <img src="../Assets/img/Catalogo/cigarrillo%20(1).png">
                        <div><p>Cigarros</p></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <img src="../Assets/img/Catalogo/patatas.png">
                        <div><p>Otros</p></div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
           <div id="todo_ese_pedo">
                <div class="row">
                    <div class="col-9">
                        <h2 id="Total" style="Color:white">Total:</h2>
                    </div>
                    <div class="col-3">                    
                        <p id="precio_total" style="Color:white;font-size: 25px;">----</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>