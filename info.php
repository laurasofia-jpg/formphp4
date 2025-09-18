<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $producto1 = $_POST['producto1'];
    $precio1 = floatval($_POST['precio1']);

    $producto2 = $_POST['producto2'];
    $precio2 = floatval($_POST['precio2']);

    $producto3 = $_POST['producto3'];
    $precio3 = floatval($_POST['precio3']);

    // Calcular suma
    $suma = $precio1 + $precio2 + $precio3;

    // Calcular descuento (16%)
    $descuento = $suma * 0.16;
    $total = $suma - $descuento;
    
    echo "<h2>Resultados</h2>";
    echo "Producto 1: $producto1 - Precio: $precio1 <br>";
    echo "Producto 2: $producto2 - Precio: $precio2 <br>";
    echo "Producto 3: $producto3 - Precio: $precio3 <br><br>";

    echo "Suma de precios: $" . number_format($suma, 2) . "<br>";
    echo "Descuento (16%): -$" . number_format($descuento, 2) . "<br>";
    echo "<strong>Total a pagar: $" . number_format($total, 2) . "</strong>";
} else {
    echo "Acceso no permitido.";
}
?>

