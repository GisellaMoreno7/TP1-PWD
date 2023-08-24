<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php
    if ($_POST) {
        $edad = $_POST['edad'];
        $condicion = $_POST['condicion'];
        $tarifa = 300;

        if ($condicion == "si" || $edad < 12) {
            $tarifa = 160;
        } elseif ($condicion == "si" && $edad >= 12) {
            $tarifa = 180;
        }

        echo "<h2>Total a pagar:</h2></br> $" . $tarifa;
    }
    ?>

    </br>
    <a href="../vista/vista.php">Volver</a>
</body>

</html>