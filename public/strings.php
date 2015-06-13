<?php 

	$intro = "We don't need no";

	$phraseOne = 'education';

	$phraseTwo = "thought control";

	$sentence1 = "{$intro} {$phraseOne}";

	$sentence2 = "{$intro} {$phraseTwo}\n";

	$line1 = "All the world's a stage,\n";

	$line2 = "And all the men and women merely players:\n";

	$line3 = "They have their exits and their entrances;\n";

	$firstName = 'Joe';
	$lastName = 'Blow';
	$address = '123 Any Street';

	echo $sentence1 . PHP_EOL;

	echo $sentence2 . PHP_EOL;

	echo $line1;
	echo $line2;
	echo $line3;

	echo "{$lastName}, {$firstName}, {$address}\n";
	echo "{$firstName}{$lastName}{$address}\n";
	echo "{$firstName} {$lastName}\n{$address}\n";

 ?>