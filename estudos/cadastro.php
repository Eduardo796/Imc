<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando</title>
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

        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Cadastrar"></b>
    </form>

</body>
</html>