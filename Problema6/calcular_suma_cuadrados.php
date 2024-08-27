<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializar la variable para la suma de los cuadrados
    $sumaCuadrados = 0;

    // Calcular la suma de los cuadrados de los 100 primeros números naturales
    for ($i = 1; $i <= 100; $i++) {
        $sumaCuadrados += $i * $i;  // Sumar el cuadrado de cada número
    }

    // Mostrar el resultado
    echo "<h2>La suma de los cuadrados de los 100 primeros números naturales es: " . $sumaCuadrados . "</h2>";
}
?>