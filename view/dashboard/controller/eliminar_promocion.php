<?php
//articulos_eliminar.php
require_once '../../../config/conexion.php';
	$conexion= new Conexion(); 
	$id_articulo=$_GET['id'];
	$sql="delete from promociones where id_promocion='$id_articulo'";
	$resultado=$conexion->ejecutarConsulta($sql);
	if($resultado){
	
		header("Location:../pages/promotions/promotion_elements.php?accion=delete");
	}
?>