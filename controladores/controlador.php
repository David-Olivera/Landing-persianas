<?php
require '../modelos/modelo.php';
$Validado = 0;
$nombre = isset($_POST['usuario']) ? $_POST['usuario'] :"00";
$pass = isset($_POST['password']) ? $_POST['password'] :"01";

$Inicio = new Inicio_model();
$Validado = $Inicio->get_inicio($nombre, $pass);

if($Validado ==1)
{
 header("Location: ../view/dashboard/dashboard.php");
}else{

    header("Location: ../view/inicio_sesion.php");
}

?>