<?php
$variants = array("1. ввести два числа", "2. выполнить сложение", "3. выполнить вычитание", "4. выполнить деление", "5. возвести число в степень");
foreach($variants as $option){
    echo $option . "\n";
}

$commandInput = readLine('выберите число из списка');

$result = 0;
$n1 = 0;
$n2 = 0;

$number1 = readline("первое число: ");
$number2 = readline("второе число:");
if(is_numeric($number1) && is_numeric($number2)){
    $n1 = $number1;
    $n2 = $number2;
}else echo "только цифры!";
?>