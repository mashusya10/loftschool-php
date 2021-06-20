<?php
/**
Задание #6

Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега <table>.
Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
Во всех остальных случаях результат выводить просто числом.

 */
echo '<table>';
for ($i=1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j=1; $j <= 10; $j++) {
        $result= $i*$j;
        echo '<td>';
        if ($i %2 ==0 && $j %2 ==0) {
            echo "($result)";
        }
        elseif ($i %2 !==0 && $j %2 !==0) {
            echo "[$result]";
        }
        else  {
            echo $result;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';