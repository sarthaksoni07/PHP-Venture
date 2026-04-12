<?php
// functions in php
echo "this is demonstration of functions in php <br>";

function sayHello(){
    echo "hello";
}
sayHello();
function greet($name){
    echo "hi $name";
}
greet("sarthak");
function sum($a,$b){
    return $a+$b;
}
$c = sum(10,20);
echo $c;
?>