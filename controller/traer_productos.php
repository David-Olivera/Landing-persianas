<?php
  require_once 'config/conexion.php';
  $conexion = new Conexion();
  $sql = "select * from promociones";	
  $sql_persianas_dobles="SELECT * FROM productos WHERE tipo_produ = 'Enrrollables Dobles'"; 
  $sql_persianas_traslucidas = "SELECT * FROM productos WHERE tipo_produ = 'Enrrollables Traslucidas'";
  $sql_persianas_black = "SELECT * FROM productos WHERE tipo_produ = 'Enrrollables Black Out'";
  $sql_toldos_automaticos="SELECT * FROM productos WHERE tipo_produ = 'Automaticas'";
  $sql_toldos_manuales = "SELECT * FROM productos WHERE tipo_produ = 'Manuales'";
  $sql_sombrilla = "select * from productos where tipo_produ = 'sombrillas'";
  $sql_mallas = "select * from productos where tipo_produ = 'mallas_sombra'";
  $sql_lonas = "select * from productos where tipo_produ = 'lonas_tapiz'";
  $sql_tapetes = "select * from productos where tipo_produ = 'tapetes'";
?>
