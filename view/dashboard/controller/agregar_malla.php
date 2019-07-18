<?php

    require_once '../../../config/conexion.php';
    $conexion = new Conexion();

    $nombre_archivo_temporal = $_FILES["imagen"]["tmp_name"];
    $nombre_archivo_original = $_FILES["imagen"]["name"];
    $frmfecha = mysqli_real_escape_string($conexion->conexion,$_POST['fecha']);
    $frmtipo = mysqli_real_escape_string($conexion->conexion,$_POST['tipo']);

    $carpeta = "../img/productos/mallas_sombra/".basename($_FILES["imagen"]["name"]);
    //Insercion a BD
    if(move_uploaded_file($nombre_archivo_temporal,$carpeta)){
        $sql = "insert into productos(imagen_produ,fecha_produ,tipo_produ)values('$nombre_archivo_original','$frmfecha','$frmtipo');";
            $resultado = $conexion->ejecutarConsulta($sql);
            if ($resultado) {
                header("Location: ../pages/products/mallas_sombra.php?accion=imagen");
            }
            echo "Archivo ubicado correctamente";
    }else{
        echo $_FILES["imagen"]["error"];
    }
?>