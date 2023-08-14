<?php
$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$email_form = $_POST["email"];
$contrasena_form = $_POST["contrasena"];

$cuerpo_mail = 
"nombre: ".$nombre_form."\r\n".
"apellido: ".$apellido_form."\r\n".
"email: ".$email_form."\r\n".
"contrasena: ".$contrasena_form;

mail("cardozoalan2000@gmail.com", "Mensaje enviado desde backendalan.com", $cuerpo_mail);
?>
<h2>Mail enviado con exito al correo de cardozoalan2000@gmail.com<, favor de comunicarse con el Alumno/h2>