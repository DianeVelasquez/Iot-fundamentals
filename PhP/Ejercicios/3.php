<?php
if (isset($_POST["dolares"])) {
    $dolares = $_POST["dolares"];
    $conversion = 0;
    if ($dolares <= 0): 
        $conversion = -1
    $conversion = $dolares *4000
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php if (isset($conversion)) { ?>
        <p>
        <?php 
            if ($conversion == -1) {
                echo "El valor ingresado es inválido, por favor ingresa un valor válido.";
            } else {
                echo "La conversión de : $dolares USD dolares es $conversion COP pesos colombianos.";
            }
        ?>
        </p>
    <?php } ?>
</body>
</html>