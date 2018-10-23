<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
    include('../conexion.php');
    
    $opc = mysqli_real_escape_string($conx, htmlspecialchars($_POST['opc']));

    switch (opc){
        case 0:
            get_categories();
            break;
        case 1: 
            get_subcategories();
            break;
        case 2:
            get_products();
            break;

    }


    function get_categories(){
        $query = mysqli_query( $conx, "SELECT * from tbl_categorias");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }
    function get_subcategories(){
        $query = mysqli_query( $conx, "SELECT * from tbl_subcategorias");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }
    function get_products(){
        $query = mysqli_query( $conx, "SELECT * from tbl_productos");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }

     mysqli_close($conx);
?>