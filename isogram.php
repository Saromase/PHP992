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

$str = 'Heizölrückstoßabdämpfung';
foreach (count_chars($str, 1) as $i => $val) {
    $ary[]= [chr($i),$val, $i];
}


echo chr(126);
printArray($ary);


?>
<html>
   <head>
      <title>Codes Unicode HTML</title>
   </head>
   <body>
      <h1>Codes Unicode HTML</h1>
      <table border="1">
         <tr><th>Caractère</th><th>Code Unicode HTML</th></tr>
         <?php
            for ($i=0; $i<10000; $i++) {
               echo "<tr><td>&#$i;</td><td>&amp;#$i;</td></tr>";
         }
      ?>
      </table>
   </body>
</html>

