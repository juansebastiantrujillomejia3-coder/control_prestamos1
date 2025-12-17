<?php
require "../config/config.php";

$id = $_GET['id'];

$sql = "UPDATE prestamos SET estado='Devuelto' WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$id]);

header("Location: ../index.php");
