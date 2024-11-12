<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST['nombre']);
    $domicilio = trim($_POST['domicilio']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);

    if (!empty($nombre) && !empty($domicilio) && !empty($telefono) && !empty($email)) {
        echo "<h2>Datos del Cliente:</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Domicilio:</strong> $domicilio</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
        echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    } else {
       
        echo "<p style='color: red;'>Por favor, completa todos los campos del formulario.</p>";
    }
} else {
    echo "<p style='color: red;'>No se han enviado datos del formulario.</p>";
}
?>
