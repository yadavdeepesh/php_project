<?php
// prime  number

function checkPrime($num){
    if ($num == 1){
    return 0;
   }
    for($i=2;$i< $num; $i++){
     
        if($num % $i==0){
            return 0;
        }
        return 1;
    }

}

$num =22;
$flag = checkPrime($num);
if($flag == 1){
    echo "Prime Number " .$num;
}
else{
    echo "Not Prime Number " .$num;
}
?>