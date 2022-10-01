<?php
$colors = ['red', 'blue', 'black'];
echo count($colors);

//search
var_dump(in_array('red', $colors));

//add
$colors[] = 'green';
array_push($colors, 'yellow');
array_push($colors, 'orange');
array_unshift($colors, 'white');

//remove
array_pop($colors);
array_shift($colors);
unset($colors[1]);

//split into 2 chunks
$chunked_array = array_chunk($colors, 2);

$mergedArray = array_merge($colors, $chunked_array);

$spredArray = [...$colors, ...$chunked_array];

$combineArray = array_combine($colors, $chunked_array);

$mapedArray = array_map(fn ($color) => $color . '1', $colors);

$keys = array_keys($combineArray);

print_r($chunked_array);
print_r($colors);
print_r($mergedArray);
print_r($spredArray);
print_r($combineArray);
print_r($keys);
print_r($mapedArray);
