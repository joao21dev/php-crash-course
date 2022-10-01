<?php
$name = "John";
$name2 = "Jane";
function echoGreeting()
{
    $name = "John";
    global $name2;
    echo "Hello $name and $name2";
}

echoGreeting();
function echoGreeting2($name = 'pessoa 1', $name2 = 'pessoa 2')
{

    return "Hello $name and $name2";
}

echo echoGreeting2('joao');
$echoArrowFunctionGreeting = fn ($name = 'pessoa 1', $name2 = 'pessoa 2') => "Hello $name and $name2";



echo $echoArrowFunctionGreeting('joao');
