<?php
function isIsogram($str){
    $str = strtolower($str);
    $search = array(" ", "-");
    $str = str_replace($search, "", $str);
    foreach (count_chars($str, 1) as $i => $val) {
    $ary[]= [chr($i),$val, $i];
    }
    for ($i = 0; $i < count($ary)-1; $i++){
        if (($ary[$i][1]) != ($ary[$i+1][1])){
            return false;
        }
    }
    return true;
}


/* Fonction Test */
function printArray(array $array){
    echo '<meta charset="utf-8" />';
    echo '<pre>';
    print_r($array);
    echo '</pre>';

}

/* Test */
printArray($ary);


?>

