var posicion = 0;

        $(".item").on("click", function() {
            posicion++;
           console.log("posicion: " +  posicion );
        });
        

        
        $("#btn_return").on("click", function() {
             save_items();
            if (posicion > 0) {
                posicion--;
                console.log("posicion: " +  posicion );
                switch (posicion){
                    case 0:
                        $('#cat_marcas').animateCss('slideOutRight', function() {
                            $('#cat_marcas').css("display", "none");
                            $('#item_cat').css("display", "block");
                            $('#item_cat').animateCss('slideInLeft');

                        }); 
                        break;
                    case 1: 
                        $('#cat_productos').animateCss('slideOutRight', function() {
                            $('#cat_productos').css("display", "none");
                            $('#cat_marcas').css("display", "block");
                            $('#cat_marcas').animateCss('slideInLeft');
                        });
                        break;
                        
                }
                
            }
        });