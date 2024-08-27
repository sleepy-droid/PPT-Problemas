<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los caracteres desde el formulario
    $char1 = $_POST['char1'];
    $char2 = $_POST['char2'];

    // Convertir los caracteres a minúsculas para evitar problemas de mayúsculas/minúsculas
    $char1 = strtolower($char1);
    $char2 = strtolower($char2);

    // Verificar si los caracteres están en orden alfabético
    if ($char1 < $char2) {
        echo "<h2>Los caracteres '$char1' y '$char2' están en orden alfabético.</h2>";
    } elseif ($char1 > $char2) {
        echo "<h2>Los caracteres '$char1' y '$char2' NO están en orden alfabético.</h2>";
    } else {
        echo "<h2>Los caracteres '$char1' y '$char2' son iguales.</h2>";
    }
}
?>
