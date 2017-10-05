#!/usr/bin/php
<?PHP
	$tab = explode(" ", $argv[1]);
	$x = 0;
	foreach ($tab as $value) {
		$value = trim($value);
		if ($value != NULL)
			$x++;
	}
	$y = 0;
	foreach ($tab as $value)
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