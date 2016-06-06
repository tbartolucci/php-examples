<?php
$groups = array(
	'AGroup'			=> 12,
	'BGroup'			=> 43,
	'Cow'				=> 32,
	'Default Group'		=> 7453,
	'ZZZZ'				=> 23423,	
);

$groupId = ( isset($groups['Default Group']) ? $groups['Default Group'] : array_shift($groups) );
echo 'Is ID '.$groups['Default Group'].' = '.$groupId.'<br/>';

$groups = array(
		'AGroup'			=> 12,
		'BGroup'			=> 43,
		'Cow'				=> 32,
		'ZZZZ'				=> 23423,
);

$groupId = ( isset($groups['Default Group']) ? $groups['Default Group'] : array_shift($groups) );
echo 'Is ID '.$groups['AGroup'].' = '.$groupId.'<br/>';