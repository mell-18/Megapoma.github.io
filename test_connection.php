<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = ""; // Deja vacío si no hay contraseña configurada
$base_datos = "emergencias";

$conexion = new mysqli($servidor, $usuario, $contraseña, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos '$base_datos'";
?>
