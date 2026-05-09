<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $divisores = 0;
    $i = 1;
    $es_primo = false;

    if ($numero <= 0) {
        $divisores = -1;
    } else {
        while ($i <= $numero) {
            if ($numero % $i == 0) {
                $divisores++;
            }
            $i++;
        }

        if ($divisores == 2) {
            $es_primo = true;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php if (isset($_POST["numero"])) { ?>
        <p>
        <?php 
            if ($divisores == -1) {
                echo "El valor ingresado es inválido, por favor ingresa un valor válido.";
            } else if ($es_primo) {
                echo "El número $numero es primo.";
            } else {
                echo "El número $numero no es primo.";
            }
        ?>
        </p>
    <?php } ?>
</body>
</html>
