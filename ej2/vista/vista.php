<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form id="form2" name="form2" method="get" action="../control/sumarHoras.php">
        Ingrese horas de cursada de Programaci&oacute;n Web Din&aacute;mica</br>
        <p></p>
        <table>
            <tr>
                <td>
                    Lunes: <input type="number" id="lunes" name="lunes">
                </td>
            </tr>
            <tr>
                <td>
                    Martes: <input type="number" id="martes" name="martes">
                </td>
            </tr>
            <tr>
                <td>
                    Mi&eacute;rcoles: <input type="number" id="miercoles" name="miercoles">
                </td>
            </tr>
            <tr>
                <td>
                    Jueves: <input type="number" id="jueves" name="jueves">
                </td>
            </tr>
            <tr>
                <td>
                    Viernes: <input type="number" id="viernes" name="viernes">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>