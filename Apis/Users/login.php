<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
    include('../conexion.php');
    $id = 0;
    $rol = 0;
   
    $num = mysqli_real_escape_string($conx, htmlspecialchars($_POST['num']));
    $pass = md5(mysqli_real_escape_string( $conx, htmlspecialchars($_POST['pass'])));


    $query = mysqli_query( $conx, "SELECT Id, Tipo from tbl_usuarios where Numero = '$num' and Contrasena = '$pass'");
    while($rows =  mysqli_fetch_assoc($query)){
        $id = $rows['Id'];
        $rol = $rows['Tipo'];
    }

    try{
        if($id != 0 ){
            $_SESSION['id'] = $id;
            $_SESSION['num'] = $num;
            $_SESSION['rol'] = $rol;
            echo "1";
            //header("Location: /fototeca/Screens/dashboard.php");
            //die();
        }else{

            echo "0";


            }

        }

    catch(Exception $e){

    }


    mysqli_close($conx);

?>