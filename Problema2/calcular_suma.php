<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Calcular la suma de los números del 1 al 1000
    $suma = 0;
    for ($i = 1; $i <= 1000; $i++) {
        $suma += $i;
    }

    // Mostrar el resultado
    echo "<h2>La suma de los números del 1 al 1000 es: " . $suma . "</h2>";
}
?>