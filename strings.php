<?php
$str =  "hey\742";
var_dump($str);
for ( $i= 0; $i < strlen($str); $i++){
    echo quoted_printable_decode ($str[$i]).PHP_EOL;
}