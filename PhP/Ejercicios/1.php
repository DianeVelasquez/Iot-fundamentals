<?php
$hexadecimal = "";

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
    <p>La conversión de : <?php echo $dolares USD dolares es $conversion COP pesos colombianos; ?></p>
</body>
</html>