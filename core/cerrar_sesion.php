<?php

session_start();
session_destroy();
header("Location: ../view/inicio_sesion.php");

?>