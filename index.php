<?php
$variants = array("ввести два числа", "выполнить сложение", "выполнить вычитание", "выполнить деление", "возвести число в степень");
foreach($variants as $option){
    echo $option . "\n";
}

$number =  readline("введите число: ");
$timeNum = readline("введите степень: ");
if(is_numeric($number) && is_numeric($timeNum))
    echo pow($number, $timeNum);
else echo "только цифры!";


?>