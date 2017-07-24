<?php 
error_reporting(0); 
$mensaje = $_REQUEST["mensaje"];
$correo = $_REQUEST["correo"];
$asunto = $_REQUEST["asunto"];
$tel = $_REQUEST["tel"];
$nombre = $_REQUEST["nombre"];


$header = 'From: ' . $correo . ", asunto ".$asunto."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 


$texto= "Escrito por: " . $nombre .  " su correo es: ". $correo . " Su telefono es " . $tel . "    Su mensaje es: " . $mensaje. " \r\n"; 


$para = "saba250582@gmail.com"; 


mail($para, $asunto, utf8_decode($mensaje), $header); 

echo "<script language='javascript'>
 

            alert('Mensaje enviado, muchas gracias.');
         </script>";

?> 