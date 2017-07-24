<?php 
error_reporting(0); 
$mensaje = $_REQUEST["mensaje"];
$correo = $_REQUEST["correo"];
$asunto = $_REQUEST["asunto"];
$tel = $_REQUEST["tel"];
$nombre = $_REQUEST["nombre"];

$texto= "Escrito por: " . $nombre .  " su correo es: ". $correo . " Su telefono es " . $tel . "    Su mensaje es: " . $mensaje. " \r\n"; 


$para = "saba250582@gmail.com"; 


mail($para, $asunto, utf8_decode($texto), $header); 

echo "<script language='javascript'>
 

            alert('Mensaje enviado, muchas gracias.');
         </script>";

?> 