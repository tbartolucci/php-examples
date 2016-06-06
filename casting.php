<?php
$mysqli = new \mysqli($argv[1],$argv[2],$argv[3],$argv[4]);

$rs = $mysqli->query("
	SELECT
	  `id`,
	  `signedBigInt`,
	  `unsignedBigInt`,
	  `unsignedInt`
	FROM
	  `big_int_test`
");

$row = $rs->fetch_assoc();

var_dump($row);

$signedBigInt = $row['signedBigInt'];
$unsignedBigInt = $row['unsignedBigInt'];
$unsignedInt = $row['unsignedInt'];

var_dump($signedBigInt);

var_dump($unsignedBigInt);

var_dump($unsignedInt);

if ($signedBigInt > 0) {
    echo 'Greater than zero' . PHP_EOL;
}

var_dump($signedBigInt);

if ($signedBigInt != 0) {
    echo 'Not Equal zero' . PHP_EOL;
}

var_dump($signedBigInt);

$signedBigInt = intval($row['signedBigInt']);
$unsignedBigInt = intval($row['unsignedBigInt']);
$unsignedInt = intval($row['unsignedInt']);

var_dump($signedBigInt);

var_dump($unsignedBigInt);

var_dump($unsignedInt);