<?php
$variants = array("ввести два числа", "выполнить сложение", "выполнить вычитание", "выполнить деление", "возвести число в степень");
foreach($variants as $option){
    echo $option . "\n";
}
$number1 = readline("первое число: ");
$number2 = readline("второе число: ");
$n1 = 0;
$n2 = 0;
if(is_numeric($number1) && is_numeric($number2)){
    $n1 = $number1;
    $n2 = $number2;
}else echo "только цифры!";
echo $n1 - $n2;
?>