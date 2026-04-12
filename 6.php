<?php
echo "this is file 6<br>";
    $x=5;
    $y = 8;
    $z = 9;
    function test(){
        global $x;
        echo $x;
        echo $GLOBALS['y'];
        echo $GLOBALS['z'];
    }
    test();

?>