<?php
$host = 'localhost';
$dbname = 'crud_example';
$username = 'root'; // Cambia esto si tu usuario es diferente
$password = ''; // Cambia esto si tu contraseña es diferente

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
