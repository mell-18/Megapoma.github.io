<?php
$servername = "localhost"; // Normalmente es localhost
$username = "root"; // Tu usuario de MySQL, por defecto es root
$password = ""; // Tu contraseña de MySQL, por defecto es vacío en XAMPP
$dbname = "emergencias"; // Nombre de tu base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
