<?php
if (isset($_POST["opcion0"])) {

    $operacion1 = $_POST["opcion0"];

    switch($operacion1) {

        case '1 Calculadora de edad':
            ?>
            <center><img src="Imagenes/1.png"></center>
            <center>
                <form action="Ejercicios/1.php" method="post">
                    <p>Ingrese el número decimal:</p>
                    <input type="number" id= "num_deci" name="numero_decimal" required>
                    <br><br>
                    <input type="submit" value="Convertir a hexadecimal">
                </form>
            </center>
            <?php
            break;

        case '2 Verificador de múltiplos':
            ?>
            <center><img src="Imagenes/2.png"></center>
            <center>
                <form action="Ejercicios/2.php" method="post">
                    <p>Ingrese los números para verificar si el primero es múltiplo del segundo:</p>

                    <label for="num1">Primer número:</label>
                    <input type="number" id="num1" name="numero_1" required>

                    <br><br>

                    <label for="num2">Segundo número:</label>
                    <input type="number" id="num2" name="numero_2" required>

                    <br><br>

                    <input type="submit" value="Verificar multiplicidad">
                </form>
            </center>
            <?php
            break;

        case '3 Conversor de Moneda': 
            ?>
            <center><img src="Imagenes/3.png"></center>    
            <center>
                <form action="Ejercicios/3.php" method="post">
                    <p>Ingrese la cantidad de dolares a convertir:</p>
                    <strong>Tasa de cambio: 4.000 (COP)</strong>
                    <label for="num1">Dolares a convertir:</label>
                    <input type="number" id="val_dolares" name="dolares" required>

                    <br><br>
                    <input type="submit" value="Convertir a COP">
                </form>
            </center>
            <?php
            break;
            
        case '4 Cálculo de Descuento':
            ?>
            <center><img src="Imagenes/4.png"></center>
            <center>
                <form action="Ejercicios/4.php" method="post">
                   <p>Ingresa el valor de tu producto:</p>

                    <label for="num1">Valor producto sin descuento:</label>
                    <input type="number" id="compra" name="compra" required>

                    <br><br>
                    <input type="submit" value="Calcular precio final">
                </form>
            </center>
            <?php
            break;

        case '5 Verificador de Número Primo':
            ?>
            <center><img src="Imagenes/5.png"></center>
            <center>
                <form action="Ejercicios/5.php" method="post">
                   <p>Ingresa el número para ver si es primo:</p>

                    <label for="num1">Número:</label>
                    <input type="number" id="numero" name="numero" required>

                    <br><br>
                    <input type="submit" value="Saber si es primo">
                </form>
            </center>
            <?php 
            break;
    }
}

