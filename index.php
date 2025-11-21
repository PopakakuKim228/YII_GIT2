<?php
$variants = array("1. ввести два числа", "2. выполнить сложение", "3. выполнить вычитание", "4. выполнить деление", "5. возвести число в степень");
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
}else echo "вводите только цифры!";
echo $n1 - $n2;
?>