#!/usr/bin/php 
<?PHP
	if (count($argv) != 2)
		exit("Incorrect Parameters\n");

	$i = 0;
	$point = 0;
	$argv[1] = str_replace(' ', '', $argv[1]);
	while (($argv[1][$i] >= '0' && $argv[1][$i] <= '9' ) || $argv[1][$i] == '.'){
		if ($argv[0][$i] == $point)
		$point++;
		$i++;
	}
	$first = substr($argv[1], 0, $i);
	if ($point > 1 || $first[0] == '.' || $first[strlen($first) - 1] == '.')
		exit("Syntax Error\n");
	$symbol = $argv[1][$i++];
	$start = $i;
	$point = 0;
	while (($argv[1][$i] >= '0' && $argv[1][$i] <= '9') || $argv[1][$i] == '.'){
		if ($argv[0][$i] == $point)
		$point++;
		$i++;
	}
	$second = substr($argv[1], $start, $i - $start);
	if ($point > 1 || $second[0] == '.' || $second[strlen($second) - 1] == '.')
		exit("Syntax Error\n");
	if ($i != strlen($argv[1]) || !strlen($first) || !strlen($second))
		exit("Syntax Error\n");
	else if ($symbol == '+')
		echo $first + $second;
	else if ($symbol == '-')
		echo $first - $second;
	else if ($symbol == '/')
		echo $first / $second;
	else if ($symbol == '*')
		echo $first * $second;
	else if ($symbol == '%')
		echo $first % $second;
	else
		exit("Syntax Error\n");
	echo "\n";
?>