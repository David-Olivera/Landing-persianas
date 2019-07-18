<?php
//articulos_eliminar.php
require_once '../../../config/conexion.php';
	$conexion= new Conexion(); 
	$id_articulo=$_GET['id'];
	$sql="delete from productos where id_producto='$id_articulo'";
	$resultado=$conexion->ejecutarConsulta($sql);
	if($resultado){
	
		header("Location:../pages/products/lona_rudo_papel_tapiz.php?accion=delete");
	}
?>