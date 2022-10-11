<?php

$example = [
    'first_name' => 'Jill',
    'last_name' => 'Smith',
    'age' => 25
];

$firstKey = array_key_first($example);
$firstValue = $example[$firstKey];

var_dump($firstKey);
var_dump($firstValue);