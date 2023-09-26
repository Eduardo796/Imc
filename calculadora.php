<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <hgroup>
        <h1>&nbsp;&nbsp;Bem Vindo A Tabuada!!!</h1>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=====================================<br>
        <h2>Escolha uma opão abaixo!!!</h2>
    </hgroup>

    <form action="calculo.php" method= "post">
    Digite (1) Soma, (2) Subtrair, (3) Multiplicar (4) Dividir !!! <br>
        <label for="">Opção:</label>
        <input type="number" name= "op" id="op" min=1 max=4><br>
        <label for="">Numero 1:</label>
        <input type="number" name= "num1" id="num1"><br>
        <label for="">Numero 2:</label>
        <input type="number" name= "num2" id="num2">
        <input type="submit" value="Calcular">

    </form>
</body>
</html>