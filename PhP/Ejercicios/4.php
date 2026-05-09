<?php

if (isset($_POST["compra"])) {
    
    $compra = $_POST["compra"];
    $total_a_pagar = 0;

    if ($compra < 1) {
        $total_a_pagar = -1;
    } else {
        $total_a_pagar = $compra - ($compra * 0.15);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php if (isset($total_a_pagar)) { ?>
        <p>
        <?php 
            if ($total_a_pagar == -1) {
                echo "El valor ingresado es inválido, por favor ingresa un valor válido.";
            } else {
                echo "Tu descuento fue aplicado satisfactoriamente. El valor total a pagar es: $total_a_pagar.";
            }
        ?>
        </p>
    <?php } ?>
</body>
</html>
