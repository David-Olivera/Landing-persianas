<?php
    session_unset();
    session_destroy();
    header("location: ../view/inicio_sesion.php");
?>