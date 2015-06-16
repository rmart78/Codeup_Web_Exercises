<?php 

	// $name = array('1','2','3','4','5');

	// you can also write it with parenthesis instead of brackets
	// but this is the old way of doing it. Ex.
	// $name = array('Raul','Daniel','Martinez');

	$name = ['1','2','3','4','5'];

	$associativeArray = ['first' => 'Raul', 'last' => 'Martinez', 'email' =>
	 'rmart78@gmail.com', 'phone' => '210-288-1803'];

	 $multiDimensionalArray = ['Person1' => ['first' => 'John', 'last' => 'Doe'],
	 'Person2' => ['first' => 'Jane', 'last' => 'Doe'],'Person3' => ['first' => 'Jonny', 'last' => 'Doe']];

	var_dump($name);

	print_r($name);

	echo $name[3] . PHP_EOL;

	var_dump($associativeArray);

	var_dump($multiDimensionalArray);

	$a = array(
		'a' => 'A',
		'b' => 'B',
		'c' => 'C',
		'd' => 'D'
	);

	echo $a['b'];

	foreach ($a as $lowerCase => $upperCase) {
		echo $lowerCase . PHP_EOL;
		echo $upperCase . PHP_EOL;
	}

?>