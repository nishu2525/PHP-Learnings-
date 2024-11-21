<?php
// Types 
        // if, if-else, else-if , switch


// if condition
$Age=5;
echo "Age is ".$Age." so watch ";
if($Age<18){
    echo "Kids content";
} 
echo '<br>';



// if-else condition
//  Example 1
$Age=25;
echo "Age is ".$Age." so watch ";
if($Age<18){
    echo "Kids content";
} 
else{
    echo "Adult contetnt";
};

echo '<br>';
echo '<br>';
//  Example 2
$name ="Sam";
echo "Name is ".$name;
echo '<br>';
if($name=="Nishad"){
    echo "Welcome back ,".$name;
}else{
    echo $name." is not present in DB ,Pls register";
}



// else-if condition
//  Example 1
$country ="India";
echo '<br>';
if($country=="India"){
    echo "Asian Country ,".$country;
}
elseif($country=="Norway"){
    echo "European Country ,".$country;
}
elseif($country==""){
    echo "European Country ,".$country;
}
echo '<br>';
echo '<br>';
echo '<br>';


//swicth 

$fav="b";

switch($fav){
    case "Red":
     echo "Red is my fav color";
    break;
    case "green":
     echo " is not my fav color";
    break;
    case "blue":
     echo " is not my fav color";
    break;
    default:
     echo "Only red is my fav color";
    break;
    
}

?>