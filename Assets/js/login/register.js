    
        
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
                     if(valid.test($("#nom").val()) && $("#nom").val().length >= 3){
                        if($("#pass").val().length >= 8){
                                    if(alphanumers.test($("#num").val()) && $("#num").val().length >= 10){
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
                              title: "La contraseña debe tener más de 8 digitos.",
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
    