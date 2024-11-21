<?php
// Logical operators.  &&, ||, !,

$a=10;
$b=20;

// AND operator 
if($a==10 && $b==20){ // here we caan write && / and 
    echo "pass";
}
// OR operator 
echo "<br>";
if($a==20 || $b==20){ // here we caan write || / or 
    echo "pass";
}

// XOR operator 
echo "<br>";
if($a==20 xor $b==20){ // XOR here-- true if any one is true ,bt not for both true 
    echo "pass";
}

// NOT operator 
echo "<br>";
if($a!=20 ){ // NOT here--  ye value chode ke sab chalega 
    echo "pass";
}
?>