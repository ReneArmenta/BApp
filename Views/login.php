<html>
    <head>
        <title>BeerApp - login</title>
       
        <link rel="stylesheet" href="../Assets/css/estilos.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="
        stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../Assets/css/lib/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container d-flex h-100">
            <!--Codigo del formulario de login-->
            <div id="login-form" class="row justify-content-center align-self-center w-100 form animated ">
                <div class="col-lg-6" id="login-form" style="float:left;">
                   <h1>BeerApp</h1>
                    <input type="text" placeholder="Direccion Email">
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
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Número de teléfono">
                    <input type="password" placeholder="Contraseña">
                    <input type="password" placeholder="Confirmar contraseña">
                    
                    <table>
                        <tr>
                            <td><input type="checkbox" class="checkbox"></td>
                            <td><p class="new-account-text check_text">Soy mayor de edad</p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkbox"></td>
                            <td><p class="new-account-text check_text">He leido los <a href="#">terminos y condiciones</a></p></td>
                        </tr>
                    </table>
                    <button>CREAR CUENTA</button>
                    
                </div>
            </div>
        </div>
    </body>
    <script src="../Assets/js/login/main-login.js"></script>
    <script>
    
    $("#new-account").on("click", function(){
        
        
        
        $('#login-form').animateCss('slideOutleft', function() {
            $('#login-form').css("display","none");
            $('#register-form').css("display","block");
            $('#register-form').animateCss('slideInRight');
        });
    });
    
    </script>
</html>