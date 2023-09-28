<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <hgroup>
        <h1> Formulário de Cadastro!!!</h1>
        <h2>Siga as opções abaixo para cadastrar!!!</h2><br>
    </hgroup>

    <form action="pessoa.php" method="post">
       <b> <label for="">Nome:</label>
        <input type="text" name="nome" required> <br>
        <label for="">Idade:</label>
        <input type="text" name="idade" required><br><br>

        <label for="">Gênero:</label>
        <input type="radio" name="gênero" value="M">Masculino
        <input type="radio" name="gênero" value="F">Feminino
        <input type="radio" name="gênero" value="O">Outro <br>

        <label for="" >Idiomas:</label>
        <input type="checkbox" name="idiomas[]" value="Inglês">Inglês
        <input type="checkbox" name="idiomas[]" value="Espanhol">Espanhol
        <input type="checkbox" name="idiomas[]" value="Francês">Francês <br><br>

        <label for="">Enail:</label>
        <input type="email" name="email" required>
        <label for="">Senha:</label>
        <input type="password" name="senha" required> <br>
        <label for="">Confirmar Senha:</label>
        <input type="password" name="confirmar" required><br><br>
         Mensagem: <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>    

</body>
</html>