<?php

function table($n){
$i=1;
 while ($i <= 10) {
     echo "$i * $n"." =  ".$i*$n;
     echo "<br>";
     $i++;
 }
}

$num = 2;

table($num);

?>