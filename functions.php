<?php

function dd($data) {
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}

function allowance($age) {
    if ($age > 21) {
        echo 'You can go in';
    } else {
        echo "I'm sorry, you cannot go inside";
    }
}
