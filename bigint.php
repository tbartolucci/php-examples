<?php
/**
 * CREATE TABLE `big_int_test` (
  `id` int(11) NOT NULL,
  `signedBigInt` bigint(20) DEFAULT NULL,
  `unsignedBigInt` bigint(20) unsigned DEFAULT NULL,
  `unsignedInt` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `big_int_test` (`signedBigInt`, `unsignedBigInt`, `unsignedInt`) values('9223372036854775806','18446744073709551615','4294967295');
 */
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

$signedBigInt 	= intval($row['signedBigInt']);
$unsignedBigInt = intval($row['unsignedBigInt']);
$unsignedInt	= intval($row['unsignedInt']);

var_dump($signedBigInt);

var_dump($unsignedBigInt);

var_dump($unsignedInt);

$signedBigInt 	= floatval($row['signedBigInt']);
$unsignedBigInt = floatval($row['unsignedBigInt']);
$unsignedInt	= floatval($row['unsignedInt']);

var_dump($signedBigInt);
echo $signedBigInt.PHP_EOL;
var_dump($unsignedBigInt);
echo $unsignedBigInt.PHP_EOL;
var_dump($unsignedInt);
echo $unsignedInt.PHP_EOL;

