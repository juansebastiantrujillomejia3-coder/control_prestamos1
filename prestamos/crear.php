<?php
require "../config/config.php";
include "../includes/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO prestamos (equipo, tipo_equipo, instructor, fecha_prestamo)
            VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        $_POST['equipo'],
        $_POST['tipo_equipo'],
        $_POST['instructor'],
        date('Y-m-d')
    ]);
    header("Location: ../index.php");
    exit;
}
?>

<h2>Nuevo Préstamo</h2>

<form method="post">
    <input name="equipo" placeholder="Equipo" required><br><br>
    <input name="tipo_equipo" placeholder="Tipo de equipo"><br><br>
    <input name="instructor" placeholder="Instructor"><br><br>
    <button>Guardar</button>
</form>

<?php include "../includes/footer.php"; ?>
