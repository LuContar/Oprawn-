<?php
$destino = "lucasconta93@gmail.com";
$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
$consulta = $_POST["comentario"];

$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nComentarios: " . $comentarios;

mail($destino,"contacto", $contenido);
header("location:index.html");
?>
<!-- 
// echo "<script>alert('correo enviado exitosamente')</script>";
// echo "<script> setTimeout(\"location.href='index.html'\"1000)</script>"; -->

