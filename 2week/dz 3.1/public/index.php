<?php
include '../function.php';

/*Задание #3.1

    Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:

    id - уникальный идентификатор, равен номеру эл-та в массиве
    name - случайное имя из 5-ти возможных (сами придумайте каких)
    age - случайное число от 18 до 45

    Преобразуйте массив в json и сохраните в файл users.json
    Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
    Посчитайте количество пользователей с каждым именем в массиве
    Посчитайте средний возраст пользователей */

for ($i=0; $i<50; $i++) {
    $users[] = newUser();
};

file_put_contents('users.json', json_encode($users));
$data = file_get_contents('users.json');
$decodedUsers = json_decode($data, true);
// спустя 5 часов я все-таки смогла открыть доспут чтобы файл у меня появился.УРА
// следующую часть я копировала из ворк шопа. но даже она у меня не работает как следует. p.s после того
//  как убрала флаги из функции  FILE_APPEND | LOCK_EX, все заработало
$names = [];
$sumAge = 0;
foreach ($decodedUsers as $users) {
    if (isset($names[$users['name']])) {
        $names[$users['name']]++;
    } else {
        $names[$users['name']] = 1;
    }
    $sumAge += $users['age'];
}

var_dump($names);
echo "Средний возраст: " . ($sumAge / sizeof($decodedUsers));