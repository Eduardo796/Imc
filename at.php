<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{

           font-size: 20px;
           font-family: Arial;  
           border-radius: 50px;
           box-shadow: 1px 1px 4px 2px red;
           height: 50px;
           width: 20%;
        } 
       
    </style>
</head>
<body>

<h1 class="ed">Formulário</h1>
    <form action="op.php" method="post">
        &nbsp;&nbsp;&nbsp;<label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        &nbsp;&nbsp;&nbsp;<label for="">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

