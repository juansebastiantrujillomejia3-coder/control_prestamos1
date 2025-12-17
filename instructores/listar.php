<?php
require "../config/config.php";

$instructores = $conexion->query(
    "SELECT DISTINCT instructor FROM prestamos WHERE instructor IS NOT NULL"
)->fetchAll();
?>

<h2>Instructores</h2>
<ul>
<?php foreach ($instructores as $i): ?>
    <li><?= $i['instructor'] ?></li>
<?php endforeach; ?>
</ul>
