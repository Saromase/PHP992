<?php 
function printPlage (int $debut, int $fin){
        $i = $debut + 1;
        $final = "<ul>";
        while ( $i < $fin){
            if (($i % 2)== 1){
                $couleur = "orange";
            } else {
                $couleur = "bleu";
            }
            $sqrt = sqrt($i);
            if (strlen($sqrt) == 1){
                $final .= "<li style='$couleur'><strong>$i</strong></li>";
            } else {
                $final .= "<li style='$couleur'>$i</li>";
            }
            
            $i++;
        }
        $final .= "</ul>";
        return $final;
    }
function intervalleArray(array $ary){
    for ($i=0; $i < count($ary)-1;$i++){
        $firstNumber = $ary[$i];
        $secondNumber = $ary[$i+1];
        $testEcart = $firstNumber - $secondNumber;
        if ($testEcart < 0){
            $number = $secondNumber - $firstNumber;
        } else{
            $number = $firstNumber - $secondNumber;
        }
        if (isset($ecart) == NULL){
            $ecart = $number;
        } else if ($ecart < $number){
            $ecart = $number;
        }
    }
    return $ecart;
}
