<?php

const NAME_USER = ['Маша','Дима','Леша', 'Катя', 'Ира'];

function newUser () {
    $user = [
        'name' => NAME_USER[array_rand(NAME_USER)],
        'age' => mt_rand(18,45)
    ];
    return $user;
};