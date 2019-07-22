<?php
class BaseDeDatos{
    public static function conexion()
    {
        $conexion= new mysqli("localhost","root","","mrpersianas");
        $conexion->query("SET NAMES 'utf8");
        return $conexion;
    }
}

?>