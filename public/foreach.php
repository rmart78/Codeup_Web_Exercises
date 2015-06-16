<?php 

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $thingsType) {
    if (is_numeric($thingsType)) {
        echo "{$thingsType} is a number\n";
    } else if (is_string($thingsType)) {
        echo "{$thingsType} is a scalar\n";
    } else if (is_array($thingsType)) {
        echo "{$thingsType} is an array\n";
    } else if (is_bool($thingsType)) {
        echo "{$thingsType} is a scalar\n";
    } else if (is_float($thingsType)) {
        echo "{$thingsType} is a scalar\n";
    } else if (is_integer($thingsType)) {
        echo "{$thingsType} is an scalar\n";
    } else if (is_null($thingsType)) {
        echo "{$thingsType} is null\n";
    } else {
    	echo "Can't match it";
    }

}


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