<?php
//simple array
$numbers = [1, 2, 3, 4];
$fruits = array('apple', 'orange');

//var_dump($numbers);
//echo $fruits[0];

//associative array
$colors = [
    1 => 'red',
    2 => 'green',
    6 => 'blue',
    4 => 'yellow',
];
$colors = [
    'white' => '#fff',
    'black' => '000',
];

$person = [
    'first_name' => 'joao',
    'last_name' => 'silva',
    'age' => 30,
    'hobbies' => ['sports', 'reading'],
];

//multidimensional array

$people = [
    [
        'first_name' => 'joao',
        'last_name' => 'silva',
        'age' => 30,
        'hobbies' => ['sports', 'reading'],
    ],
    [
        'first_name' => 'maria',
        'last_name' => 'silva',
        'age' => 25,
        'hobbies' => ['sports', 'reading'],
    ],
];

var_dump(json_encode($people));
