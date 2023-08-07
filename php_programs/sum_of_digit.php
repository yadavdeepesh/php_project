<?php
// sum of digit
$num =123;
$temp =$num;

$sum=0;
while($num>0){
    $rem = $num%10;
    $sum = $sum + $rem;
    $num = $num/10;
}
if($temp==$sum){
echo "sum of digit ".$sum;
}
//echo "sum =".$sum ." temp = ".$temp;

?>