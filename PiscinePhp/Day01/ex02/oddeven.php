#!/usr/bin/php
<?PHP
	while(1)
	{
		echo "Entrez un nombre: ";
		$stdin = fopen('php://stdin', 'r');
		$number = fgets($stdin);
		if (feof($stdin) == TRUE)
			exit("\n");
        if ($number) {
            $number = str_replace("\n", "", "$number");
            if (is_numeric($number)) {
                if ($number % 2 == 0)
                    echo "Le chiffre " . $number . " est Pair\n";
                else
                    echo "Le chiffre " . $number . " est Impair\n";
            } else
                echo "'" . $number . "' n'est pas un chiffre\n";
        }
    }
?>