<?php 
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha= $_POST['senha'];

if(isset($_POST['$idiomas'])){
    $idiomas = $_POST['$idiomas'];
    echo "$idiomas";
    foreach($idiomas as $idiomas){
        print $idiomas;
    }
}

if($idade>18){
    print("Maior de idade");
}else if($idade<18){
    print("Menor de idade");
}else{
    print("Idade Certa");
}

?>