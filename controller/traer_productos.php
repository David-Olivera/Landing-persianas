<?php
  require_once 'config/conexion.php';
  $conexion = new Conexion();



  $sql_toldos_brazos="SELECT * FROM productos WHERE tipo_produ = 'Brazos'";
  $sql_toldos_caida = "SELECT * FROM productos WHERE tipo_produ = 'Caida'";
$sql_toldos_pergolio="SELECT * FROM productos WHERE tipo_produ = 'Pergolio'";


  $sql_sombrilla = "select * from productos where tipo_produ = 'sombrillas'";
  $sql_mallas = "select * from productos where tipo_produ = 'mallas_sombra'";
  $sql_mallas_anticiclonicas = "select * from productos where tipo_produ = 'mallas_anticiclonicas'";
  $sql_lonas = "select * from productos where tipo_produ = 'lonas_tapiz'";
  $sql_tapetes = "select * from productos where tipo_produ = 'tapetes'";

  $sql = "select * from promociones";	
  $sql_k="SELECT * FROM productos WHERE tipo_produ = 'Enr_black'"; 
  $sql_persianas_enrollables_semi="SELECT * FROM productos WHERE tipo_produ = 'Enr_semi'"; 
  $sql_persianas_enrollables_tras="SELECT * FROM productos WHERE tipo_produ = 'Enr_tras'"; 
  $sql_persianas_enrollables_screen="SELECT * FROM productos WHERE tipo_produ = 'Enr_screen'"; 
 
  $sql_persianas_duo = "SELECT * FROM productos WHERE tipo_produ = 'Duo_black'";

  $sql_persianas_sheer_black = "SELECT * FROM productos WHERE tipo_produ = 'She_black'";
  $sql_persianas_sheer_semi = "SELECT * FROM productos WHERE tipo_produ = 'She_semi'";
  $sql_persianas_sheer_tras = "SELECT * FROM productos WHERE tipo_produ = 'She_tras'";
 
  $sql_persianas_shangrila = "SELECT * FROM productos WHERE tipo_produ = 'Sha_tras'";
  
  $sql_persianas_romana_black = "SELECT * FROM productos WHERE tipo_produ = 'Rom_black'";
 $sql_persianas_romana_tras = "SELECT * FROM productos WHERE tipo_produ = 'Rom_semi'";
 $sql_persianas_romana_semi = "SELECT * FROM productos WHERE tipo_produ = 'Rom_tras'";
 
    $sql_persianas_horizontal_madera = "SELECT * FROM productos WHERE tipo_produ = 'Hor_mad'";
 
    $sql_persianas_vertical_tela = "SELECT * FROM productos WHERE tipo_produ = 'Ver_tela'";

    $sql_persianas_aluminio = "SELECT * FROM productos WHERE tipo_produ = 'Alu_alu'";
 

?>
