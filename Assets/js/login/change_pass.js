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
                                   if(d == 1){
                                       swal({
                                          type: 'success',
                                          title: "Pronto te mandaremos un mensaje con tu nueva contraseña.",
                                          showConfirmButton: true,
                                        });
                                   }else{
                                       if(d == 2){
                                           swal({
                                          type: 'error',
                                          title: "Ha ocurrido un error inesperado.",
                                          showConfirmButton: true,
                                        });
                                       }
                                   } 
                               }
                           },
                       });
            
            
        }