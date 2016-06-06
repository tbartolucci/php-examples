<?php
$names = [
    'sidIg70',
    'sidCSR',
    'sidCC90',
    'sidIC'
];

foreach ( $names as $name ) {
    $db = md5($name) % 100;
    echo $name . ': ' . $db . PHP_EOL;
}

