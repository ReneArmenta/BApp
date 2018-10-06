//Accion para el boton de iniciar sesión
        $("#btn_session").on('click', function(){
            
            var alphanumers = /^[Z0-9]+$/;
            if(alphanumers.test($("#login_num").val()) && $("#login_num").val().length == 10){
            var data = {
                        num: $("#login_num").val(),
                        pass: $("#login_pass").val()
                    }
                    var url = 'http://localhost:8080/BApp/Apis/Users/login.php';
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
                                      title: "Usuario o contraseña incorrecta",
                                      showConfirmButton: true,

                                    });
                               }else{
                                   
                                   swal({
                                      type: 'success',
                                      title: 'Sesión iniciada',
                                      showConfirmButton: false,
                                      timer: 2000
                                    });
                                 
                                   
                               }


                           },

                       });
            }else{
                swal({
                      type: 'error',
                      title: "Escriba un numero valido",
                      showConfirmButton: true,

                    });
            }    
        });