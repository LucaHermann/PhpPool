#!/usr/bin/php
<?PHP
	$array = array();
    unset($argv[0]);
    foreach($argv as $value){
        $tmp = array_filter(explode(' ', $value));
        foreach ($tmp as $value2)
            $array[] = $value2;
    }
    sort($array, SORT_STRING);
    foreach ($array as $value)
        echo $value."\n";
?>