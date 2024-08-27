<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir el valor de N desde el formulario
    $n = $_POST['n'];

    // Verificar si el valor de N es positivo
    if ($n > 0) {
        echo "<h2>Los primeros $n múltiplos de 4 son:</h2>";
        echo "<ul>";
        
        // Calcular y mostrar los primeros N múltiplos de 4
        for ($i = 1; $i <= $n; $i++) {
            $multiplo = $i * 4;
            echo "<li>$multiplo</li>";
        }
        
        echo "</ul>";
    } else {
        echo "<h2>Por favor, introduce un número mayor que 0.</h2>";
    }
}
?>

