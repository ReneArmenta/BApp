<?php
header("Access-Control-Allow-Origin: *");
include('../conexion.php');
//Obtiene datos mandados por el metodo POST en el formulario de registrar o modificar usuario

$nom = htmlspecialchars($_POST["nom"]);
$num = htmlspecialchars($_POST["num"]);
$pass = md5(htmlspecialchars($_POST["pass"]));
$tipo = 0;




//hace una busqueda en la tabla para ver si existe el nombre de usuario que se le manda

$query = mysqli_query($conx, "select Numero from tbl_usuarios where Numero = '$num'");
if (!$query) {
    //si la busqueda no se pudo completar recibe el error y lo despliega;
    echo 'Error: ' . mysqli_error($conx);
    exit;
}else{
    $rows = array();
    $rows[0] = 0;
    while($r = mysqli_fetch_assoc($query)) {
        $rows[0] = $r['Numero'];
        
    }
    
    //almacena el resultado de la busqueda en un arreglo
    

    //compara el valor del arreglo en 0, si el nombre de usuario que se le manda a la tabla es igual al que se recibe de la tabla entonces manda un mensaje diciendo que le nombre de usuario ya esta en uso de lo contrario lo inserta en la tabla.
    if($rows[0] == $num){
        echo "Ya se ha registrado un usuario con este numero";
    }else{
        $sql = "insert into tbl_usuarios (Nombre, Numero, Contrasena, Tipo) VALUES ('$nom','$num', '$pass', '$tipo')";

        if(mysqli_query($conx, $sql)){
                echo "1";
            }else{
                echo "Error:" . $conx->error;
            }
    }
}






//cierre de conexion con la base de datos.
mysqli_close($conx);

?>