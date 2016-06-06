<?php
class Mine
{
	public static function output()
	{
		echo '1';
	}
	
	public function yo()
	{
		echo 'yo';
	}
}

$m = new Mine();

$m->output();
$m->yo();