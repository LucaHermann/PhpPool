#!/usr/bin/php
<?PHP
	$array = array();
	$tmp = explode(" ", $argv[1]);
	foreach ($tmp as $value)
		array_push($array, $value);
	array_push($array, $array[0]);
	unset($array[0]);
	$x = 0; $y = 0;
	foreach ($array as $value) {
		$value = trim($value);
		if ($value != NULL)
			$x++;
	}
	foreach ($array as $value)
	{
		if ($value != NULL) {
			echo $value;
			$y++;
			if ($y < $x)
				echo " ";
			else
				echo "\n";
		}
	}
?>