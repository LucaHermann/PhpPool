#!/usr/bin/php 
<?PHP
	if (count($argv) != 4)
		exit("Incorrect Parameters\n");

	$first = str_replace('	', '', str_replace(' ', '', $argv[1]));
	$second = str_replace('	', '', str_replace(' ', '', $argv[2]));
	if ($second == "do_op.php")
		$second = '*';
	$third = str_replace('	', '', str_replace(' ', '', $argv[3]));

	if ($second == '+')
		echo $first + $third;
	else if ($second == '-')
		echo $first - $third;
	else if ($second == '/' && $third == 0)
		echo '0';
	else if ($second == '/')
		echo $first / $third;
	else if ($second == '*')
		echo $first * $third;
	else if ($second == '%' && $third == 0)
		echo '0';
	else if ($second == '%')
		echo $fisrt % $third;
	echo "\n";
?>