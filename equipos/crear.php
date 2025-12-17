<?php
require "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conexion->prepare(
        "INSERT INTO prestamos (equipo, tipo_equipo, fecha_prestamo)
         VALUES (?, ?, ?)"
    );
    $stmt->execute([
        $_POST['equipo'],
        $_POST['tipo_equipo'],
        date('Y-m-d')
    ]);
    header("Location: ../index.php");
}
?>

<form method="post">
    <input name="equipo" placeholder="Nombre del equipo" required>
    <input name="tipo_equipo" placeholder="Tipo de equipo">
    <button>Guardar equipo</button>
</form>
