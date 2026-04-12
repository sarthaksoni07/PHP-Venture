<?php
// this is arrays in php 
$arr = array(10,20,30);
for($i = 0 ; $i<=2;$i++){
    echo "$arr[$i]<br>";
}

// key value pair
$arr1 = array(
    "name" => "sarthak", // separated by commas
    "sname" => "soni"
);
echo $arr1["name"];

// multidimensional array 

$arr2 = array(
    array(0, 1),
    array(3,4,5)
);
echo $arr2[1][2];

print_r($arr2);
echo count($arr2);

?>