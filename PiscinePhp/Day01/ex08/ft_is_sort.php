<?PHP
     function ft_is_sort($array){
        $array_sort = $array;
        sort($array_sort, SORT_STRING);
        if (array_diff_assoc($array_sort, $array) == NULL)
            return true;
        return false;
    }
?>