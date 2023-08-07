<?php
// armstrong number 
/*
ex-1
407 = (4*4*4) + (0*0*0) + (7*7*7)  
        = 64 + 0 + 343  
407 = 407 
ex-2 
153 = (1*1*1) + (0*0*0) + (7*7*7)
    = 1 + 125 +27
    = 153
*/
$num =153;
$temp =$num;

$sum=0;
while($num>0){
    $rem = $num%10;
    $sum = $sum + $rem*$rem*$rem;
    $num = $num/10;
}
if($temp==$sum){
echo "Armstrong Number ".$temp;
}
else{
    echo "Not Armstrong Number ".$temp;
}
//echo "sum =".$sum ." temp = ".$temp;

?>