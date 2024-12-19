<?php
// ingresar1.php

// Verificar si el formulario ha sido enviado mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];    
    $tipo_usuario = $_POST['tipo_usuario'];
    $contrasena = $_POST['contrasena'];

    // Incluir el archivo de conexión a la base de datos
    include 'db.php';  // Asegúrate de tener el archivo db.php con la conexión a la base de datos

    // Encriptar la contraseña antes de almacenarla
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Sentencia preparada para evitar inyección SQL
    $sql = "INSERT INTO usuarios (nombre, email, tipo_usuario, contrasena) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Enlazar los parámetros
        mysqli_stmt_bind_param($stmt, "ssss", $nombre, $email, $tipo_usuario, $contrasena_hash);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "Usuario registrado exitosamente";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
