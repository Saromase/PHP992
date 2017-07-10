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
