html
<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $numero = $_POST['numero'];

        echo "<h2>Tabuada do $numero:</h2>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
