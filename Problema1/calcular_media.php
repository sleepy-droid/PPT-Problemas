<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los valores de los números
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];

    // Calcular la media
    $media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5) / 5;

    // Mostrar el resultado
    echo "<h2>La media de los números es: " . $media . "</h2>";
}
?>
