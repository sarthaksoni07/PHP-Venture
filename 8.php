<?php

$conn = mysqli_connect("localhost", "root" , "", "test");
if($conn){
    echo "connection successful";
}
else{
    echo "connection failed";
}

$sql = "CREATE TABLE USERS";
$stat = mysqli_query($conn, $sql);
?>