<?php
require_once('../config/parametros.php');
class Conexion{
	/**/
	function __construct(){
		try{		//crear una clase conexion , construct es el contructos, con realiza la conexion a la base de datos
				//cambiar el con por conexion y agregar BD
		  $this->conexion=new mysqli(SERVIDOR,USUARIO,CONTRASENIA,BD)or die ("Error en la conexión");
		   mysqli_set_charset($this->conexion,"utf8");//cambiar con
		  // mysqli_select_db($this->con,BD) or die ("No se ha encontrado la base de datos");//se comenta esta linea 
		}catch(Exception $ex){
			throw $ex;  
		}
	}//cuantos registros arroja la consulta
	function totalRegistros($sql){//hacer un cambio total
		$resultado_consulta=$this->conexion->query($sql);
		$total_registros=$resultado_consulta->num_rows;
	//$resultado_consulta=mysqli_query($this->con,$sql);
	
		//alternativa
		//$total_registros=($resultado_consulta)num_rows;
		//$total_registros=mysqli_num_rows($resultado_consulta);
		return $total_registros;//esto se deja 
	}
	//para usar un select
	  function traerValores($sql){
		  $resultado_consulta=mysqli_query($this->conexion,$sql);
		  $datos=null;
		  while($fila=mysqli_fetch_assoc($resultado_consulta)){
			  $datos=$fila;
		  }
		  return $datos;
	  }
	  
	function ejecutarConsulta($sql){
		$resultado_consulta=$this->conexion->query($sql);
		if($resultado_consulta){
			return true;
		}
	}
function seleccionarValores($sql){
		$resultado_consulta=$this->conexion->query($sql);
		$datos=array();
		while ($datos[]=$resultado_consulta->fetch_assoc());
		return $datos;
	}
	}
?>