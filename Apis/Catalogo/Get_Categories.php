<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
    include('../conexion.php');
    
    $opc = htmlspecialchars($_POST["opc"]);
    
    

    switch ($opc){
        case 0:
            get_categories($conx);
            break;
        case 1: 
            $id_cat = htmlspecialchars($_POST["id_cat"]);
            get_subcategories($conx, $id_cat);
            break;
        case 2:
            $id_cat = htmlspecialchars($_POST["id_cat"]);
            get_products($conx, $id_cat);
            break;

    }


    function get_categories($conx){
        $query = mysqli_query( $conx, "SELECT * from tbl_categorias");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }
    function get_subcategories($conx, $id_cat){
        $query = mysqli_query( $conx, "SELECT * from tbl_subcategorias where categoria = $id_cat");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }
    function get_products($conx, $id_cat){
        $query = mysqli_query( $conx, "SELECT * from tbl_productos where subcategoria = $id_cat");
        $row = array();
        while($rows =  mysqli_fetch_assoc($query)){
            $row[] = $rows;

        }


        echo json_encode($row);
    }

     mysqli_close($conx);
?>