<?php
    $destino = "hrgarcia73@yahoo.com.ar";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $mensaje = $_POST["message"];

    $Contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    mail($destino, "Contacto", $Contenido);
    header("Location:index.html");
?>
