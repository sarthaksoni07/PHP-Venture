<!-- loop -->
 <?php
 echo "this is file 3";
 echo "<br>";
 for($i = 1 ; $i <=5;$i++){
    for($j = 1; $j <=$i; $j++){
        echo "*";
    }
    echo "<br>";
 }
$a=10;
 while ($a > 1){
    echo $a;
    $a-=1;
 }
 ?>