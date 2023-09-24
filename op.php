<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = ($peso/($altura*$altura));

    if($imc<16.9){
        echo $imc.": ". "Muito abaixo do peso";
    }else if($imc>=17 & $imc<=18.4){
        echo "Imc: ".$imc." = ". "Abaixo do peso";
    }else if($imc>=18.5 & $imc<=24.9){
        echo "Imc: ".$imc." = ". "Peso normal";
    }else if($imc>=25 & $imc<=29.9){
        echo "Imc: ".$imc." = ". "Acima do peso";
    }else if($imc>=30 & $imc<=34.9){
        echo "Imc: ".$imc." = ". "Obesidade grau 1";
    }else if($imc>=35 & $imc<=40){
        echo "Imc: ".$imc." = ". "Obesidade grau 2";
    }else if($imc>40){
        echo "Imc: ".$imc." = ". "Obesidade grau 3";
    }

?>