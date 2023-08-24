<html>

<head>
    <title></title>
</head>

<body>
    <?php
    if ($_POST) {
        $numero = $_POST['numero'];
        switch ($numero) {
            case $numero > 0:
                echo "Número positivo";
                break;
            case $numero < 0:
                echo "Número negativo";
                break;
            case $numero == 0:
                echo "Número igual a 0";
        }
    }
    ?>
    <a href="../vista/vista.php">Volver</a>
</body>

</html>