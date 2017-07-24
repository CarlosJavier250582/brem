<?php 
error_reporting(0); 
$nombre = $_POST['nombre_txt']; 
$correo_electronico= $_POST['mail_txt']; 
$asunto= $_POST['asunto_txt']; 
$tel= $_POST['tel_txt'];
$mensaje=$_POST['mensaje_txt']; 

$header = 'From: ' . $mail . ", asunto ".$subject."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 


$texto= "Escrito por: " . $nombre .  " su correo es: ". $correo_electronico . " Su telefono es " . $tel . "    Su mensaje es: " . $mensaje. " \r\n"; 


$para = "saba250582@gmail.com"; 


mail($para, $asunto, utf8_decode($texto), $header); 

echo "<script language='javascript'>
 

            alert('Mensaje enviado, muchas gracias.');
         </script>";

?> 
