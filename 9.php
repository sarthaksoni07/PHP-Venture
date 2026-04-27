<?php

try{
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
    throw new Exception("connection failed");
    }
    echo "successfull connected to database<br>";
}
catch(Exception $e){
   echo $e->getmessage();
}


$age  = $_POST['age'];
$name  = trim($_POST['name']);
$sname  = trim($_POST['sname']);

t ry{

    if(empty($age)|| empty($name)||empty($sname)){
        throw new Exception("values cannot be empty<br>");
    }

    $sql = "INSERT INTO students (age,name,sname) VALUES ($age , '$name', '$sname')";

    if(!mysqli_query($conn, $sql)){
        throw new Exception(mysqli_error($conn));
    };

    echo "successfully submitted<br>";
}
catch(Exception $e){
    echo $e->getmessage();
}

try{
    if(!mysqli_close($conn)){
        throw new Exception("failed to close");
    }
    echo "connection closed successfully";
}
catch(Exception $e){
   echo $e->getmessage();
}
?>