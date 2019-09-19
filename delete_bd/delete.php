<?php
$DNI = $_GET["DNI"];
$num_ss = $_GET["SE_SOCIAL"];
$name = $_GET["name"];
$sexo = $_GET["sexo"];
require("conec.php");

//conección de base de datos por procedimientos.
    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
//conectarnos a la base de datos.
    mysqli_select_db($conexion, $db_nombre) or die("no se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $query = "DELETE FROM trabajador where DNI='$DNI' ";
    $resultado = mysqli_query($conexion, $query);
  
    if($resultado == false){
        echo "Error en la consulta";
    }else{
        //mysqli_affected_rows función que nos devuelve las filas afectadas
        if( mysqli_affected_rows($conexion) == 0){
            echo "no hay registros que eliminar con este DNI";
        }else{
            echo "Se han eliminado ". mysqli_affected_rows($conexion). " registros" ;
        }
    }
    mysqli_close($conexion);

?>
