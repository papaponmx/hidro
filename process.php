<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

echo "<pre>";
$email_body = "";
$email_body .= "Nombre: " . $nombre . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Mensaje: " . $mensaje . "\n";

echo $email_body;
echo "</pre>";

//To Do: Send Email
header("location:thanks.php");
?>