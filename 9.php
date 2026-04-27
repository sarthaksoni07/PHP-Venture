<?php

$conn = mysqli_connect("localhost","root","","test");
if($conn){
    echo "successfull<br>";
}
$age  = $_POST['age'];
$name  = trim($_POST['name']);
$sname  = trim($_POST['sname']);

if(empty($age)|| empty($name)||empty($sname)){
    die("values cannot be empty<br>");
}

$sql = "INSERT INTO students (age,name,sname) VALUES ($age , '$name', '$sname')";
if(mysqli_query($conn, $sql)){
    echo "successful<br>";
}
else{
    echo "unsucessful<br>";
}
?>