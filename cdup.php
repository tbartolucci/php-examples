<?php
$path = '/';
$parts = explode('/',$path);



$path = '/dfdsfs/asdfsdfs/sdfasdf';
$parts = explode('/',$path);
array_pop($parts);
$path = implode('/',$parts);
echo $path;