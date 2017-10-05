<?PHP
    function ft_split($str){
        $return = array_filter(explode(' ', $str));
        sort($return, SORT_STRING);
        return $return;
    }
?>