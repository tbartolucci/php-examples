<?php
echo PHP_EOL.PHP_EOL.'Question 1: '.PHP_EOL.PHP_EOL;
$var = 1; 
	print " A = ".($var &= 0 ? '1' : '2');
	print " B = ".(($var &= 0) ? '1' : '2');
echo PHP_EOL.PHP_EOL.'Question 2: '.PHP_EOL.PHP_EOL;
class ClassOne
	{
		var $a;
	}

	echo "A = ".((array() == new StdClass) ? 1 : 0);
	echo "B = ".((array() == new ClassOne) ? 1 : 0);
	echo "C = ".((array() == (array)new StdClass) ? 1 : 0);
	echo "D = ".((array() == (array)new ClassOne) ? 1 : 0);
	echo "F = ".((array(NULL) == (array)new ClassOne) ? 1 : 0);
echo PHP_EOL.PHP_EOL.'Question 3: '.PHP_EOL.PHP_EOL;
	$a = (object)'qwerty';
	var_dump($a);
echo PHP_EOL.PHP_EOL.'Question 4: '.PHP_EOL.PHP_EOL;
$i = 3;  
	echo $i++ + ++$i;
	echo $i;
	
	
echo PHP_EOL.PHP_EOL.'Question 5: '.PHP_EOL.PHP_EOL;
class foobar 
	{ 
		protected $_bar; 

		function foobar() 
		{ 
			$this->_bar = array('a', 'b', 'c'); 
		} 

		function &bar() 
		{ 
			return $this->_bar; 
		} 
		
		function flip() 
		{  
			$this->_bar = array_flip($this->_bar); 
		} 
	} 

	$foo = new foobar(); 
	$a = &$foo->bar(); 
	var_dump($a); 
	echo "<br>";
	$foo->flip(); 
	var_dump($a);
	
	
echo PHP_EOL.PHP_EOL.'Question 6: '.PHP_EOL.PHP_EOL;
class ClassTwo
	{
		var $value;

		function ClassTwo($val = NULL)
		{
			$this->value = $val;
			$GLOBALS['a'] = &$this;
		}
	}

	$b = new ClassTwo('1');
	$c = new ClassTwo('2');
	$a->value = 'a1';
	$b->value = 'b1';
	$c->value = 'c1';
	echo "a:",$a->value,"\n";
	echo "b:",$b->value,"\n";
	echo "c:",$c->value,"\n";

echo PHP_EOL.PHP_EOL.'Question 7: '.PHP_EOL.PHP_EOL;
class foo 
	{
		var $_var = '1';

		function aa()
		{
			echo $this->_var;
		}	
	}

	class foo2 extends foo	
	{
		function aa()
		{
			$this->_var = 2;
			parent::aa();
		}
	}

	class foo3 extends foo2
	{
		function aa()
		{
			$this->_var = 3;
			parent::aa();
		}
	}

	$f = new foo3();
	echo $f->aa();