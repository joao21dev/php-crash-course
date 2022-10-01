<?php
$name = 'Joao';
$age = 30;
$has_kids = true;
$sum = 1 + 2;
define('PI', 3.14);

echo PI;
echo $name;
echo $age;
var_dump($has_kids);
var_dump($sum);
echo 'name is ' . $name . ' and age is ' . $age . ' and has kids is ' . $has_kids;
echo "name is $name and age is $age and has kids is $has_kids";
echo "name is ${name} and age is ${age} and has kids is ${has_kids}";
