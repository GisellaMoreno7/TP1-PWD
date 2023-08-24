<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $estudios = $_POST['estudios'];
        $sexo = $_POST['sexo'];

        //Condiciones para la edad
        if ($edad >= 18) {
            $esMayor = "<h2>[Persona mayor de edad]</h2>";
        } else {
            $esMayor = "<h2>[Persona menor de edad]</h2>";
        }

        //Condiciones para los deportes
        if (isset($_POST['deporte'])) {
            $colDeportes = $_POST['deporte'];
            $cadena = implode(", ", $colDeportes);
            $cadenaDeportes = "</br>Practica los siguientes deportes: " . $cadena;
        } else {
            $cadenaDeportes = "</br>No practica ningún deporte. ";
        }

        echo $esMayor . "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion . "
        </br>Sexo: " . $sexo . "</br>Nivel de estudios: " . $estudios . $cadenaDeportes;
    }
    ?>
    <p></p>
    <a href="../vista/vista.php">Volver</a>
</body>

</html>