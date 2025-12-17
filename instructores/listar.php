<?php 
require "../config/config.php";

// Consulta mejorada: ordena por instructor y cuenta cuántos préstamos tiene cada uno
try {
    $stmt = $conexion->query("
        SELECT instructor, COUNT(*) as total_prestamos 
        FROM prestamos 
        WHERE instructor IS NOT NULL 
        GROUP BY instructor 
        ORDER BY instructor ASC
    ");
    $instructores = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error en la consulta: " . $e->getMessage());
}
?>

<h2>Instructores</h2>
<ul>
<?php foreach ($instructores as $i): ?>
    <li>
        <?= htmlspecialchars($i['instructor']) ?> 
        (Préstamos: <?= $i['total_prestamos'] ?>)
    </li>
<?php endforeach; ?>
</ul>

