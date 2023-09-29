<?php 
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha= $_POST['senha'];
$idiomas = $_POST['idiomas'];
$gênero = $_POST['gênero'];

echo $nome; 
echo "<br>";

if($idiomas='Inglês'||$idiomas='inglês'){
   echo "Inglês";
}else if($idiomas='Espanhol'||$idiomas='espanhol'){
    echo "Espanhol";
}else if($idiomas='Francês'||$idiomas='francês'){
    echo "Francês";
}else{
    echo "Opção Inválida !!!";
}

echo "<br>";

if($idade>18){
    print("Maior de idade");
}else if($idade<18){
    print("Menor de idade");
}else{
    print("Idade Certa");
}

echo "<br>";

if($genero='M'||$genero='m'){
    echo "Masculino";
}else if($genero='F'||$genero='f'){
    echo "Feminino";
}else if($genero='O'||$genero='o'){
    echo "Outro";
}else{
    echo "Opção Inválida !!!";
}

?>