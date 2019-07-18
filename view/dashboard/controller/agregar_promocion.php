<?php

    require_once '../../../config/conexion.php';
    $conexion = new Conexion();

    $nombre_archivo_temporal = $_FILES["imagen"]["tmp_name"];
    $nombre_archivo_original = $_FILES["imagen"]["name"];
    $frmfecha = mysqli_real_escape_string($conexion->conexion,$_POST['fecha']);

    $carpeta = "../img/promociones/".basename($_FILES["imagen"]["name"]);
    //Insercion a BD
    if(move_uploaded_file($nombre_archivo_temporal,$carpeta)){
        $sql = "insert into promociones(imagen_promo,fecha_promo)values('$nombre_archivo_original','$frmfecha');";
            $resultado = $conexion->ejecutarConsulta($sql);
            if ($resultado) {
                header("Location: ../pages/promotions/promotion_elements.php?accion=imagen");
            }
            echo "Archivo ubicado correctamente";
    }else{
        echo $_FILES["imagen"]["error"];
    }
?>