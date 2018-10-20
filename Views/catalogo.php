<?php
    session_start();
    if($_SESSION['id'] != 0){
?>
<html>

<head>
    <title>BeerApp - Catalogo</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

    <link rel="stylesheet" href="../Assets/css/estilos.css">
    <link rel="stylesheet" href="../Assets/css/lib/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="
        stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</head>

<body id="catalogo">
    <div id="view-catalogo" class="container">
        <div id="cabeza">
            <div class="row">
                <div class="col-9">
                    <button id="btn_return"><label class="fa fa-angle-left" style="font-size:30px; color:white"></label></button>
                </div>
                <div class="col-3">
                    <button id="Finalizar" data-toggle="modal" data-target="#Fin_Pedido">
                        <p>Finalizar</p>
                    </button>
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
    <!--catalogo-->
    <div id="item_cat" class="container">
        <div class="row">
            <div class="col-6">
                <div id="btn_cerveza" class="item">
                    <img src="../Assets/img/Categorias/cerveza.png">
                    <div>
                        <p>Cerveza</p>
                    </div>
                </div>
            </div>
            <div class=" col-6">
                <div class="item">
                    <img src="../Assets/img/Categorias/coctel.png">
                    <div>
                        <p>Coolers</p>
                    </div>
                </div>
            </div>
            <div class=" col-6">
                <div class="item">
                    <img src="../Assets/img/Categorias/cigarrillo.png">
                    <div>
                        <p>Cigarros</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="item">
                    <img src="../Assets/img/Categorias/patatas.png">
                    <div>
                        <p>Otros</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Marcas-->
    <div id="cat_marcas" class="container">
        <div class="row">
            <div class="Col-6">
                <div id="btn_tecate" class="item">
                    <img src="../Assets/img/Productos/tecate.png">
                    <p style="color:white">Tecate</p>
                </div>
            </div>
            <div class="Col-6">
                <div id="btn_budlight" class="item">
                    <img src="../Assets/img/Productos/Bud.png">
                    <p style="color:white">bud light</p>
                </div>
            </div>
            <div class="Col-6">
                <div id="btn_heineken" class="item">
                    <img src="../Assets/img/Productos/vino.png">
                    <p style="color:white">Heineken</p>
                </div>
            </div>
            <div class="Col-6">
                <div id="btn_modelo" class="item">
                    <img src="../Assets/img/Productos/modelo.png">
                    <p style="color:white">Modelo</p>
                </div>
            </div>
        </div>
    </div>
    <!--tipodeproducto-->
    <div id="cat_productos">
        <div class="row">
            <div class="Col-6">
                <div class="item_producto" item_name="10 botes" item_quantity="0" item_price="160">
                    <div class="producto">
                        <img src="../Assets/img/Productos/tecate.png">
                        <p style="color:white">10 botes</p>
                    </div>
                    <p class="item_price">$160</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>

                    </div>
                </div>
            </div>
            <div class="Col-6">
                <div class="item_producto" item_name="12 botes" item_quantity="0" item_price="150">
                    <div class="producto">
                        <img src="../Assets/img/Productos/Bud.png">
                        <p style="color:white">12 botes</p>
                    </div>
                    <p class="item_price">$150</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>
                    </div>
                </div>
            </div>
            <div class="Col-6">
                <div class="item_producto" item_name="caguama indio" item_quantity="0" item_price="50">
                    <div class="producto">
                        <img src="../Assets/img/Productos/vino.png">
                        <p style="color:white">caguama indio</p>
                    </div>
                    <p class="item_price">$50</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>

                    </div>
                </div>
            </div>
            <div class="Col-6">
                <div class="item_producto" item_name="6 botes" item_quantity="0" item_price="100">
                    <div class="producto">
                        <img src="../Assets/img/Productos/tecate.png">
                        <p style="color:white">6 botes</p>
                    </div>
                    <p class="item_price">$100</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>

                    </div>
                </div>
            </div>
            <div class="Col-6">
                <div class="item_producto" item_name="24 botes" item_quantity="0" item_price="60">
                    <div class="producto">
                        <img src="../Assets/img/Productos/Bud.png">
                        <p style="color:white">24 botes</p>
                    </div>
                    <p class="item_price">$60</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>
                    </div>
                </div>
            </div>
            <div class="Col-6">
                <div class="item_producto" item_name="caguama tecate" item_quantity="0" item_price="31">
                    <div class="producto">
                        <img src="../Assets/img/Productos/vino.png">
                        <p style="color:white">caguama tecate</p>
                    </div>
                    <p class="item_price">$31</p>
                    <div class="btn_quantity d-flex justify-content-center">
                        <label class="fa fa-minus-circle btn_menos"></label>
                        <p class="num_quantity">0</p>
                        <label class="fa fa-plus-circle btn_mas"></label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Finalizar pedido -->
    <div class="modal fade" id="Fin_Pedido">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="div_ticket">
                        <div class="container" id="ticket">
                            <div class="container" id="ticket-container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Total del Pedido:</h1>
                                    </div>
                                </div>
                                <div class="row">
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
                                <div class="row">
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
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div id="todo_ese_pedo" class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h2 id="Total" style="Color:white">Total:</h2>
                </div>
                <div class="col-3">
                    <p id="precio_total" style="Color:white;font-size: 25px;">$ 0</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../Assets/js/login/main-login.js"></script>
    <script src="../Assets/js/finalizar_pedido/finalizar_pedido.js"></script>
    <script src="../Assets/js/catalogo/historial.js"></script>
    <script src="../Assets/js/catalogo/save_items.js"></script>
    <script>
        //Scripts para animar los menus
        $("#item_cat .item").on("click", function() {
            $('#item_cat').animateCss('slideOutleft', function() {
                $('#item_cat').css("display", "none");
                $('#cat_marcas').css("display", "block");
                $('#cat_marcas').animateCss('slideInRight');

            });
        });
        $("#cat_marcas .item").on("click", function() {
            $('#cat_marcas').animateCss('slideOutleft', function() {
                $('#cat_marcas').css("display", "none");
                $('#cat_productos').css("display", "block");
                $('#cat_productos').animateCss('slideInRight');
            });
        });
        //Script para el contador de los articulos al presionar el botón más
        $(".item_producto").find(".btn_mas").click(function() {
            var i = $(this).closest(".item_producto").find(".num_quantity").text();
            i++;
            $(this).closest(".item_producto").find(".num_quantity").text(i);

            $(this).closest(".item_producto").attr("item_quantity", i);
        });
        //Script para el contador de los articulos al presionar el botón menos
        $(".item_producto").find(".btn_menos").click(function() {
            var i = $(this).closest(".item_producto").find(".num_quantity").text();
            if (i > 0) {
                i--;
            }
            $(this).closest(".item_producto").find(".num_quantity").text(i);
            $(this).closest(".item_producto").attr("item_quantity", i);
        });
    </script>
</body>

</html>
<?php 
}else{
            header("Location: login.php");
            die();
        }


?>
