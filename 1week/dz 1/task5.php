<?php
/**
Задание #5
Создайте массив $bmw с ячейками:
model
speed
doors
year
Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
Создайте массивы $toyota' и '$opel аналогичные массиву $bmw (заполните данными).
Объедините три массива в один многомерный массив.
Выведите значения всех трех массивов в виде:
 * CAR name
name ­ model ­speed ­ doors ­ year

 */

$bmw = [
    'model' => 'x5',
    'speed' => '120',
    'doors'=> '5',
    'year' => '2015',
];
$toyota = [
    'model' => 'RAV4',
    'speed' => '210',
    'doors'=> '3',
    'year' => '2005',
];
$opel = [
    'model' => 'corsa',
    'speed' => '140',
    'doors'=> '5',
    'year' => '2019',
];
$cars = [["name" => "bmw", "value" => $bmw],
         ["name" => "toyota", "value" => $toyota],
         ["name" => "opel", "value" => $opel]];

foreach ($cars as $value) {
    echo "CAR " . $value["name"];
    echo "<br>";

    foreach ($value["value"] as $item) {
        echo $item . " ";
    }
    echo "<br>";
    echo "<br>";
}

