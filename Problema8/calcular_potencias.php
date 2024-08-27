<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Las 15 primeras potencias de 4 son:</h2>";
    echo "<ul>";

    // Calcular y mostrar las 15 primeras potencias de 4
    for ($i = 1; $i <= 15; $i++) {
        $potencia = pow(4, $i);
        echo "<li>4^$i = $potencia</li>";
    }

    echo "</ul>";
}
?>