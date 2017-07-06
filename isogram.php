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

$str = 'Heizölrückstoßabdämpfung';
function testIso($str){
    $str = strtolower($str);
    $search = array(" ", "-");
    $str = str_replace($search, "", $str);
    foreach (count_chars($string, 1) as $i => $val) {
        if ($val[$i] != $val[$i+1]){
        return true;
        }
    }
    return false;
}
/* Test */
// printArray($ary);
 var_dump(testIso($str));
?>


