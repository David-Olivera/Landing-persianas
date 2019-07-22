<?php

$nombre = $_POST['name'];
$mail =$_POST['email'];
$razon = $_POST['subject'];
$mns = $_POST['message'];
$header = 'From: '.$mail." \r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type : text/plain";
$mensaje = "Este mensaje fue enviado por" . $nombre . ",/r/n";
$mensaje .= "Su e-mail es: ". $mail . "\r\n";
$mensaje .= $mns;
$mensaje .= "Enviado el ". date('d/m/Y',time());
$para = 'jorgeknight101@gmail.com';
mail($para, $razon, utf8_decode($mensaje), $header);


?>