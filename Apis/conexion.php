<?php

    //$usuario = "ramiro";
    //$password = "ramiro123";
    //$servidor = "localhost";
    //$basededatos = "beerapp";

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "beerapp";


$conx = mysqli_connect( $servidor, $usuario, $password ) or die("No se ha podido conectar al servidor de bases de datos");
$db = mysqli_select_db( $conx, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>