<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
   
$resultado = $peso/($altura*$altura);

if($resultado <18.5){
    echo $resultado.": ". 'Abaixo do peso normal';

}else if($resultado>=18.5 && $resultado<=24.9){
    echo $resultado.": ". 'Peso Normal';

}else if($resultado>=25 && $resultado<29.9){
    echo $resultado.": ". 'Exesso de peso'; 

}else if($resultado>=30 && $resultado<=34.9){
    echo $resultado.": ". 'Obesidade classe 1';

}else if($resultado>=35 && $resultado<=39.9){
    echo $resultado.": ". 'Obesidade classe 2';

}else if($resultado>=40){
    echo $resultado.": ". 'Obesidade classe 3';
}
?>