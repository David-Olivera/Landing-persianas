<?php
    //Creamos una instancia a la clase conexion
    $mi_conexion = new Conexion;

    if(!empty($_POST)){
        //convertimos el texto a un string para evitar insercion sql
        $usuario = mysqli_real_escape_string($mi_conexion->conexion,$_POST['usuario']);
        $password = mysqli_real_escape_string($mi_conexion->conexion,$_POST['password']);
        $error = '';
        //Encriptamos la contraseña
        $sha1_pass = sha1($password);

        //Query de validacion
        $sql = "select * from usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
        //Hacemos uso del metodo TotalRegistros de la clase conexion
        $registros = $mi_conexion->totalRegistros($sql);
        if($registros > 0){
			//utilizamos el metodo traerValores para encontrar el usuario especifico
            $fila =$mi_conexion->traerValores($sql);
            //$_SESSION es un array asociativo que contiene variables de sesión disponibles para el script actual.
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['status'] = $fila['status'];
            $_SESSION['usuario'] = $fila['usuario'];

            header("Location: dashboard/dashboard.php");
        }else{
            $error = "
            <script>
			    alert('Usuario o Contraseña incorrecto');
	        </script>";
            echo $error;
        }
    }

?>