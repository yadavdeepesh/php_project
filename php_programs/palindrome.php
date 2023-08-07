<?php
// palindrome number 
/*
ex-1
121  
*/
/*

$num = 121;
$temp =$num;

$sum=0;
while($num){
    $rem = $num%10;
    $sum = $sum + $rem*10;
    $num = $num/10;
    // echo $num;
}
echo $temp."______".$sum;
echo "<br>";
if($temp==$sum){
echo "palindrome Number ".$temp;
}
else{
    echo "Not palindrome Number ".$temp;
}*/
//echo "sum =".$sum ." temp = ".$temp;


function palindrome($n){  
    $number = $n;  
    $sum = 0;  
    while(floor($number)) {  
    $rem = $number % 10;  
    $sum = $sum * 10 + $rem;  
    $number = $number/10;  
    }  
    return $sum;  
    }  
    $input = 1235321;  
    $num = palindrome($input);  
    if($input==$num){  
    echo "$input is a Palindrome number";  
    } else {  
    echo "$input is not a Palindrome";  
    }  
?>