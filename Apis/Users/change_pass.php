<?php
header("Access-Control-Allow-Origin: *");
include('../conexion.php');
$num = htmlspecialchars($_POST["num"]);
$numero = 0;

$query = mysqli_query($conx, "select Numero from tbl_usuarios where Numero = '$num'");
if (!$query) {
    //si la busqueda no se pudo completar recibe el error y lo despliega;
    echo 'Error: ' . mysqli_error($conx);
    exit;
}else{
    
    while($r = mysqli_fetch_assoc($query)) {
        $numero = $r['Numero'];
        
    }
        
    if($numero != $num){
        echo "0";
    }else{
        $sql = mysqli_query($conx, "insert into tbl_solicitudes (telefono,tipo_solicitud) VALUES ('$num','0')");
        
        
         if(mysqli_query($conx, $sql)){
                echo "1";
            }else{
                echo "Error:" . $conx->error;
            } 
    }   
}

?>