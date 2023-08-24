<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form8" name="form8" method="post" action="../control/calcularTarifa.php">
        <h2>Para calcular la tarifa, ingrese los siguientes datos</h2>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">

        <p></p>

        <label for="condicion">Estudia</label>
        <input type="radio" name="condicion" value="si">
        </br>
        <label for="condicion">No estudia</label>
        <input type="radio" name="condicion" value="no">

        <p></p>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>