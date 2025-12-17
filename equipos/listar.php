<?php
require "../config/config.php";
$equipos = $conexion->query(
    "SELECT equipo, tipo_equipo FROM prestamos WHERE activo=1"
)->fetchAll();
?>

<h2>Equipos registrados</h2>
<ul>
<?php foreach ($equipos as $e): ?>
    <li><?= $e['equipo'] ?> (<?= $e['tipo_equipo'] ?>)</li>
<?php endforeach; ?>
</ul>
