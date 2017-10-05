#!/usr/bin/php
<?PHP
	unset($argv[0]);
	$arrayalpha = array();
	$arraynum = array();
	$arrayfullshit = array();
	foreach ($argv as $value) {
		$tmp = explode(" ", $value);
			foreach ($tmp as $value2) {
				if (ctype_alpha($value2))
					array_push($arrayalpha, $value2);
				else if (ctype_digit($value2))
					array_push($arraynum, $value2);
				else if
					array_push($arrayfullshit, $value2);}
				}
		natcasesort($arrayalpha);
		sort($arraynum, SORT_STRING);
		sort($arrayfullshit, SORT_STRING);
		foreach ($arrayalpha as $value)
					echo $value."\n";
		foreach ($arraynum as $value)
					echo $value."\n";
		foreach ($arrayfullshit as $value)
					echo $value."\n";
?>