<?php
echo "this is php file 2";
$a=10;
$b=15;
$c=20;
$d=($a==$b);
echo "$c";
// if , else, elseif

if($a>$b && $a>$c){
    echo "A";
}
elseif($b>$c){
    echo "B";
}
else{
    echo "C is the greatest";
}

?>