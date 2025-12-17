<?php
require "config/config.php";
include "includes/header.php";

$sql = "SELECT * FROM prestamos WHERE eliminado = 0 ORDER BY id DESC";
$prestamos = $conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Listado de Préstamos</h2>

<table border="1">
    <tr>
        <th>Equipo</th>
        <th>Tipo</th>
        <th>Instructor</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

<?php foreach ($prestamos as $p): ?>
<tr>
    <td><?= $p['equipo'] ?></td>
    <td><?= $p['tipo_equipo'] ?></td>
    <td><?= $p['instructor'] ?></td>
    <td><?= $p['fecha_prestamo'] ?></td>
    <td><?= $p['estado'] ?></td>
    <td>
        <?php if ($p['estado'] == 'En préstamo'): ?>
            <a href="devolver.php?id=<?= $p['id'] ?>">Devolver</a>
        <?php endif; ?>
        |
        <a href="eliminar.php?id=<?= $p['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php include "includes/footer.php"; ?>
