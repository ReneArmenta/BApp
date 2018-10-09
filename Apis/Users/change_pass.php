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
    echo "1";
}    

?>