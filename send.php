<?php 
//Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$company = $_POST['company'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo

$destinatario = "sac@telemovilperu.com";
$asunto = "Contacto desde nuestra Web"

$cuerpo =  "De: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Teléfono: " . $telefono . "\n" . "Compañía: " . $company . "\n" . "Mensaje: " . $Mensaje;


//Enviando mensaje

mail($destinatario, $asunto, $cuerpo);


 ?>