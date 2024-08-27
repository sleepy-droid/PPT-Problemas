<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializar las variables de suma
    $sumaPares = 0;
    $sumaImpares = 0;

    // Calcular las sumas de pares e impares entre 1 y 200
    for ($i = 1; $i <= 200; $i++) {
        if ($i % 2 == 0) {
            $sumaPares += $i;  // Es par
        } else {
            $sumaImpares += $i;  // Es impar
        }
    }

    // Mostrar los resultados
    echo "<h2>La suma de los números pares entre 1 y 200 es: " . $sumaPares . "</h2>";
    echo "<h2>La suma de los números impares entre 1 y 200 es: " . $sumaImpares . "</h2>";
}
?>
