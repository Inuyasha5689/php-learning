<?php

$person = [
    31, 'brown'
];

$person = [
    'age' => 19,
    'hair' => 'brown',
    'career' => 'Web Developer'
];
/* associative array */

$person['name'] = 'Drake';

unset($person['age']);

echo '<pre>';

die(var_dump($person));

echo '</pre>';

require 'index.view.php';
?>
