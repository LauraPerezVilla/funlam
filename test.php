<?php
// Incluye el archivo de conexión a la base de datos
require_once 'Entity/conexion.php';

try {
    // Query SELECT para obtener datos de la base de datos
    $query = 'SELECT * FROM "Vendedores"';
    $result = $conn->query($query);

    // Verifica si la consulta fue exitosa
    if ($result) {
        echo '<html>';
        echo '<head>';
        echo '<title>Resultados de la consulta</title>';
        echo '</head>';
        echo '<body>';
        echo '<h1>Resultados de la consulta</h1>';
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>';

        // Recorre los resultados y muestra los datos en la tabla
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['vendedores_pk'] . '</td>';
            echo '<td>' . $row['nombres'] . '</td>';
            echo '<td>' . $row['apellidos'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '</body>';
        echo '</html>';
    } else {
        echo "Error en la consulta.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

