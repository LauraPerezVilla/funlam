<?php
$host = "localhost"; // Host de la base de datos
$port = "5455"; // Puerto de PostgreSQL por defecto
$dbname = "amigo"; // Nombre de tu base de datos
$user = "postgres"; // Usuario de PostgreSQL
$password = "dani0928"; // Contraseña de PostgreSQL

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    // Establecer el modo de error de PDO a excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    //echo "Error de conexión: " . $e->getMessage();
}
?>
