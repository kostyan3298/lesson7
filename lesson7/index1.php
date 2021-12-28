<!--Функция которая на входе принимает два числа и возвращает:
а. большее из двух -->

<?php

function compare_num($a,$b){
    if ($a>$b) return $a;
    else return $b;
}

//б. возводит в степень 
function pow_num($a,$b){
return $a**$b;
}

//с. Находит среднее арифметическое
function average_num($a,$b){
    $sum= $a+$b;
return $sum/2;
}

echo 'Из чисел 2 и 15 больщее это ', compare_num(2,15), '<br>';
echo '3 в степени 2 равно ', pow_num(3,2), '<br>';
echo 'Среднее арифметическое для чисел 5 и 7 это ', average_num(5,7);

?>