<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    <body>
        <?php
        if ($_GET) {

            $lun = $_GET['lunes'];
            $mar = $_GET['martes'];
            $mie = $_GET['miercoles'];
            $jue = $_GET['jueves'];
            $vie = $_GET['viernes'];

            $horasSemanales = [$lun, $mar, $mie, $jue, $vie];
            $cantHoras = 0;

            foreach ($horasSemanales as $horas) {
                $cantHoras += $horas;
            }

            echo "<h2>Cantidad de horas cursadas en Programación Web Dinámica:</h2>\n" . $cantHoras;
        }
        ?>

        <a href="../vista/vista.php">Volver</a>

    </body>

</body>

</html>