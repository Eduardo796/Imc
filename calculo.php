<?php
    $op =$_POST=['op'];
    $num1 =$_POST['num1'];
    $num2 =$_POST['num2'];
    $res

switch ($op) {
    case 1:
        $res = $num1+$num2;
        echo "O resultado da soma é : .$res";
    break;

    case 2:
        $res = $num1-$num2;
        echo "O resultado da subtração é : .$res";
    break;

    case 3:
        $res = $num1*$num2;
        echo "O resultado da multiplicação é : .$res";
    break;

    case 4:
        if($num1&$num2!=0){
        $res = $num1/$num2;
        echo "O resultado da divisão é : .$res";
    }else{
        echo "Não é possível dividir por zero !!!";
    }
    break;
    default:
    echo "Opção Inválida.";
  
    }
?>