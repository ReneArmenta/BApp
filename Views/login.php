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
                    <input id="login_num" type="tel" placeholder="Numero de teléfono" maxlength="10">
                    <input id="login_pass" type="password" placeholder="Contraseña" maxlength="30">
                    <button id="btn_session" >INICIAR SESIÓN</button>
                    <p class="new-account-text" id="forgot-pass"><a href="#">Olvide mi contraseña</a></p>
                    <div class="border"></div>
                    <p class="new-account-text">¿No tienes cuenta? <a href="#" id="new-account">Crea una aquí</a></p>
                </div>
            </div>
           
            <!--Codigo del formulario de registro-->
            <div id="register-form" class="row justify-content-center align-self-center w-100 form animated" style="display: none;">
                
                <div class="col-lg-6" id="login-form" style="float:left;">
                    
                    <h1>¡REGISTRATE!</h1>
                    <input id="nom" type="text" placeholder="Nombre" maxlength="50">
                    <input id="num" type="tel" placeholder="Número de teléfono" maxlength="10">
                    <input id="pass" type="password" placeholder="Contraseña" maxlength="30">
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
    <script src="../Assets/js/login/register.js"></script>
    <script src="../Assets/js/login/login.js"></script>
    <script>
        //Terminar el mensaje y la llamada ajax para poder cambiar la contraseña
        $("#forgot-pass").on("click",function(){
            const {value: name} =  swal({
          title: '¿Olvidaste tu contraseña?',
          text: 'Escribe tu numero de teléfono y uno de nuestros tecnicos te mandará un mensaje con la nueva contraseña.',
          input: 'text',
          inputPlaceholder: 'Numero de telefono',    
          inputAttributes: {
            maxlength: 13
          },
          showCancelButton: true,
          cancelButtonText: "Cancelar",
          confirmButtonText: "Enviar",
          confirmButtonColor: '#FFA500',             
          inputValidator: (value) => {
              
            var alphanumers = /^[Z0-9\-\s]+$/;
            if(!alphanumers.test(value)){
                return 'Hay caracteres no permitidos en el campo';

            }
            if(value.length > 13){
                return 'Limite de caracteres exedido';
            }else{
                if(value.length < 10){
                    return 'Escribe un numero de teléfono valido';
                }
            }
            return !value && 'Escribe algo en el campo.';
            
          }
        }).then((result) => {
                    if(result.value){
                        change_pass(result.value);
                    }
                    
                });
            
        });
        
        function change_pass(number){
            var data = {
                        num: number
                    }
                    var url = 'http://localhost:8080/BApp/Apis/Users/change_pass.php';
                       $.ajax({
                           url: url,
                           type: 'POST',
                           dataType: 'text',
                           data: data,
                           success: function(d){
                               //manejo de mensajes regresados por ajax.
                               if(d == 0){
                                   swal({
                                      type: 'error',
                                      title: "Este número no se encuentra registrado",
                                      text: "Por favor escriba un numero valido.",
                                      showConfirmButton: true,

                                    });
                               }else{
                                   
                                   swal({
                                      type: 'success',
                                      title: d,
                                      showConfirmButton: true,
                                    });
                                   
                               }
                           },
                       });
            
            
        }
        
    </script>
</html>