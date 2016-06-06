<?php
$xmlstring = file_get_contents('project.xml');

$xml = simplexml_load_string($xmlstring);
$json = json_encode($xml);
$array = json_decode($json,true);

echo '<pre>'.print_r($array,true).'</pre>';