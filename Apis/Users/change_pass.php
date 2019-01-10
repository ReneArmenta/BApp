<?php
header("Access-Control-Allow-Origin: *");
include('../conexion.php');
$num = htmlspecialchars($_POST["num"]);
$numero = 0;
$type = 0;

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
        
        $stmt = mysqli_prepare($conx, "INSERT INTO tbl_solicitudes(telefono,tipo_solicitud)VALUES(?,?)");
        mysqli_stmt_bind_param($stmt, 'ss', $num, $type);
        mysqli_stmt_execute($stmt);

         if(mysqli_stmt_execute($stmt)){
                echo "1";
            }else{
                echo "2";
            }
         
    }   
}
 mysqli_close($conx);

?>