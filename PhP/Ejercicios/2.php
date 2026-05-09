<?php

if (isset($_POST["numero_1"]) && isset($_POST["numero_2"])) {
  
  $numero1 = $_POST["numero_1"];
  $numero2 = $_POST["numero_2"];
  $es_multiplo = false;

  if ($numero2 != 0 && $numero1 % $numero2 == 0) {
    $es_multiplo = true;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php if (isset($es_multiplo)) { ?>
        <p>
        <?php 
            if ($es_multiplo) {
                echo "El número $numero1 es múltiplo de $numero2.";
            } else {
                echo "El número $numero1 NO es múltiplo de $numero2.";
            }
        ?>
        </p>
    <?php } ?>

</body>
</html>
