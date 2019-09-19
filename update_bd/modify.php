<?php
$DNI = $_GET["DNI"];
$num_ss = $_GET["num_ss"];
$name = $_GET["nombre_apellidos"];
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

    $query = "update  trabajador set  num_ss = '$num_ss', nombre_apellidos='$name', sexo='$sexo'
            where DNI = '$DNI'";
    $resultado = mysqli_query($conexion, $query);
  
    if($resultado == false){
        echo "Error en la consulta";
    }else{
        echo "Registro guardado";
        echo "<table> <tr><td>$DNI </td></tr>";
        echo "<tr><td>$num_ss </td></tr>";
        echo "<tr><td>$name </td></tr>";
        echo "<tr><td>$sexo<td></tr>";
        
    }
    mysqli_close($conexion);

?>
