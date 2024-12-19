<?php
// ver_mensajes.php
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$query = "SELECT * FROM mensajes ORDER BY fecha_envio DESC";
$resultado = $conexion->query($query);
?>

<h1>Mensajes enviados</h1>
<table border="1">
    <tr>
        <th>Remitente</th>
        <th>Destinatario</th>
        <th>Mensaje</th>
        <th>Fecha de envío</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($fila['remitente']); ?></td>
            <td><?php echo htmlspecialchars($fila['destinatario']); ?></td>
            <td><?php echo htmlspecialchars($fila['mensaje']); ?></td>
            <td><?php echo htmlspecialchars($fila['fecha_envio']); ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<?php
$conexion->close();
?>
