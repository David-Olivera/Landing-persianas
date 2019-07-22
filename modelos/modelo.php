<?php
require'../core/bd.php';

session_start();

class Inicio_model{
    private $bd;
    private $validacion;
    private $aux;
    private $personas;
    private $consulta;
    public function __construct()
    {
        $this->db=BaseDeDatos::Conexion();
        $this->validacion=0;
        $this->personas=array();
        $this->consulta;
        $this->aux=0;
    }
    public function get_inicio($nombre, $pass)
    {
        $this->consulta=$this->db->query("SELECT id_usuario FROM usuarios WHERE usuario ='$nombre' and password=SHA1('$pass')");
        while($row = mysqli_fetch_array($this->consulta))
        {
            $this->aux++;
        }
        if($this->aux>0)
        {
            $_SESSION['user']=$nombre;
            $this->Validacion=1;
        }
        else{
            $this->Validacion=0;
            
        }
        return $this->Validacion;
    }
}

?>