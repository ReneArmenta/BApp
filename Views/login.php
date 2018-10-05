<html>
    <head>
        <title>BeerApp - login</title>
       
        <link rel="stylesheet" href="../Assets/css/estilos.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="
        stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../Assets/css/lib/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../Assets/js/lib/sweetalert2.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container d-flex h-100">
            <!--Codigo del formulario de login-->
            <div id="login-form" class="row justify-content-center align-self-center w-100 form animated ">
                <div class="col-lg-6" id="login-form" style="float:left;">
                   <h1>BeerApp</h1>
                    <input type="text" placeholder="Numero de teléfono">
                    <input type="password" placeholder="Contraseña">
                    <button >INICIAR SESIÓN</button>
                    <p class="new-account-text"><a href="#">Olvide mi contraseña</a></p>
                    <div class="border"></div>
                    <p class="new-account-text">¿No tienes cuenta? <a href="#" id="new-account">Crea una aquí</a></p>
                </div>
            </div>
           
            <!--Codigo del formulario de registro-->
            <div id="register-form" class="row justify-content-center align-self-center w-100 form animated" style="display: none;">
                
                <div class="col-lg-6" id="login-form" style="float:left;">
                    
                    <h1>¡REGISTRATE!</h1>
                    <input id="nom" type="text" placeholder="Nombre" maxlength="50">
                    <input id="num" type="tel" placeholder="Número de teléfono" maxlength="12">
                    <input id="pass" type="password" placeholder="Contraseña" maxlength="10">
                    <input id="confirm-pass" type="password" placeholder="Confirmar contraseña" maxlength="30">
                    
                    <table>
                        <tr>
                            <td><input type="checkbox" class="checkbox check_edad"></td>
                            <td><p class="new-account-text check_text">Soy mayor de edad</p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkbox check_tc"></td>
                            <td><p class="new-account-text check_text">He leido los <a href="#">terminos y condiciones</a></p></td>
                        </tr>
                    </table>
                    <button id="btn-add-usr">CREAR CUENTA</button>
                    <button id="btn-cancel">CANCELAR</button>
                </div>
            </div>
        </div>
    </body>
    <script src="../Assets/js/login/main-login.js"></script>
    <script>
        
        
    //accion para el boton de crear cuenta y sus animaciones
    $("#new-account").on("click", function(){
        $('#login-form').animateCss('slideOutleft', function() {
            $('#login-form').css("display","none");
            $('#register-form').css("display","block");
            $('#register-form').animateCss('slideInRight');
        });
    });
    //Accion para boton de cancelar
    $("#btn-cancel").click(function(){
        empty_inputs();
        $('#register-form').animateCss('slideOutRight', function() {
            $('#register-form').css("display","none");
            $('#login-form').css("display","block");
            $('#login-form').animateCss('slideInLeft');
        });
        
    });
    //Accion para el boton de crear cuenta
    $("#btn-add-usr").on("click", function(){
         //metodo ajax para mandar los datos del formulario a la base de datos.
       
        var alphanumers = /^[Z0-9]+$/;
        var valid = /^[a-zA-Z0-9\-\s]+$/;
            check_Empty()
                if(check_Empty() == true){
                     if(valid.test($("#nom").val())){
           
                        if(alphanumers.test($("#num").val())){
                              var data = {
                        nom: $("#nom").val(),
                        num: $("#num").val(),
                        pass: $("#pass").val()
                    }
                    var url = 'http://localhost:8080/BApp/Apis/Users/add_User.php';
                       $.ajax({
                           url: url,
                           type: 'POST',
                           dataType: 'text',
                           data: data,
                           success: function(d){
                               //manejo de mensajes regresados por ajax.
                               if(d != 1){
                                   swal({
                                      type: 'error',
                                      title: d,
                                      showConfirmButton: true,

                                    });
                               }else{
                                   $(".entryText").val("");
                                   swal({
                                      type: 'success',
                                      title: 'Gracias por registrarte',
                                      showConfirmButton: false,
                                      timer: 2000
                                    });
                                   empty_inputs();
                                   $('#register-form').animateCss('slideOutRight', function() {
                                        $('#register-form').css("display","none");
                                        $('#login-form').css("display","block");
                                        $('#login-form').animateCss('slideInLeft');
                                    });
                               }


                           },

                       });
                  }else{
                      swal({
                          type: 'error',
                          title: "Agregue un numero de teléfono valido",
                          showConfirmButton: true,
                        });
                  }
                }else{
                    swal({
                          type: 'error',
                          title: "Escriba un nombre valido",
                          showConfirmButton: true,
                        });
                    
                }
            }else{
                swal({
                      type: 'error',
                      title: "Por favor llene todos los campos",
                      showConfirmButton: true,
                    });
            }
    });
        //Agregar la validacion de que los checkbox estan chekeados
    function check_Empty() {
        var valid_empty = false;
        var empty = 0;
        var check = 0;
        
        $('#nom, #num, #pass, #confirm-pass').each(function(){
           if (this.value == "") {
               empty++;
           } 
        });
        
        if($('.check_edad').prop('checked')){
            check++;
        }
        if($('.check_tc').prop('checked')){
            check++;
        }
        
         if(empty == 0 && check == 2){
            
                        valid_empty = true;
                    }
        return valid_empty;
    }
        
        function empty_inputs(){
            $('#nom, #num, #pass, #confirm-pass').val("");
                                   $('.check_edad').prop('checked',false);
                                   $('.check_tc').prop('checked',false);
        }
    
    </script>
</html>