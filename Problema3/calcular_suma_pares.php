<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Calcular la suma de los 10 primeros números pares
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i * 2;  // Los números pares son 2, 4, 6, 8, ..., 20
    }

    // Mostrar el resultado
    echo "<h2>La suma de los 10 primeros números pares es: " . $suma . "</h2>";
}
?>
