<?php
// factorial
function factorial($num){
    $i=$num;
    $fact = 1;
    while ($i>0){
        $fact=$fact * $i;
        $i--;
    }
    return $fact;
}

$num = 5;
echo factorial($num);


?>