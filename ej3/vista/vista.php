<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form id="form3" name="form3" method="post" action="../control/mostrarDatos.php">

        <div class="datosPersonales">
            <h2>Datos personales</h2>

            <table>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <input type="text" id="nombre" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido:
                    </td>
                    <td>
                        <input type="text" id="apellido" name="apellido">
                    </td>
                </tr>
                <tr>
                    <td>
                        Edad:
                    </td>
                    <td>
                        <input type="text" id="edad" name="edad">
                    </td>
                </tr>
                <tr>
                    <td>
                        Direcci&oacute;n:
                    </td>
                    <td>
                        <input type="text" id="direccion" name="direccion">
                    </td>
                </tr>
            </table>
        </div>

        <div class="estudios">
            <h2>Nivel de estudios</h2>

            <div class="nivel">
                <label for="estudios">No tiene estudios:</label>
                <input type="radio" id="estudios1" name="estudios" value="ninguno.">
            </div>
            <div class="nivel">
                <label for="estudios">Estudios primarios:</label>
                <input type="radio" id="estudios2" name="estudios" value="primarios.">
            </div>
            <div class="nivel">
                <label for="estudios">Estudios secundarios:</label>
                <input type="radio" id="estudios3" name="estudios" value="secundarios.">
            </div>
        </div>

        <div class="sexo">
            <h2>Sexo</h2>

            <label for="sexo">Indique uno</label>
            <select id="sexo" name="sexo">
                <option value="femenino.">femenino</option>
                <option value="masculino.">masculino</option>
            </select>
        </div>

        <div class="deportes">
            <h2>Deportes que practica</h2>

            <div class="tipo">
                <label for="futbol">Fútbol:</label>
                <input type="checkbox" id="futbol" name="deporte[]" value="fútbol">
            </div>
            <div class="tipo">
                <label for="basket">Básquet:</label>
                <input type="checkbox" id="basket" name="deporte[]" value="básket">
            </div>
            <div class="tipo">
                <label for="tennis">Tennis:</label>
                <input type="checkbox" id="tennis" name="deporte[]" value="tennis">
            </div>
            <div class="tipo">
                <label for="voley">Voley:</label>
                <input type="checkbox" id="voley" name="deporte[]" value="voley">
            </div>
        </div>

        <div class="botonEnviar">
            <input type="submit" id="submit" name="submit" value="Enviar">
        </div>
    </form>
</body>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../control/funciones.js"></script>

</html>