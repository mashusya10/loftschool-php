<?php
require'../function.php';


//task4
date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');
echo '<br>';
echo date('d.m.Y H:i:s', 1456261200);
echo '<br>';


//task5
$strings ='Карл у Клары украл Кораллы';
echo str_replace('К', '', $strings);
echo '<br>';
$strings1 ='Две бутылки лимонада';
echo str_replace('Две', 'Три', $strings1);


//task6
echo '<br>';
file_put_contents('test.txt', "Hello again!");
my_file_get_contents('test.txt');

// не понимаю, почему выдает ошибку.
//Warning: file_put_contents(test.txt): failed to open stream: Permission denied in /var/www/html/public/index.php on line 25
//Warning: fopen(test.txt): failed to open stream: No such file or directory in /var/www/html/function.php on line 71
