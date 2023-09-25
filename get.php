<?php

$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$date=$_POST['date'];
$selectseat=$_POST['selectseat'];


$conn = mysqli_connect("localhost","root","","moviedb");

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

$sql= "INSERT INTO book(name,phoneno,date,selectseat) VALUES ('$name','$phoneno','$date','$selectseat')";

if(mysqli_query($conn,$sql)) {
    echo "Record inserted sucessfully";
}

$resultAll=mysqli_query($conn,"SELECT * FROM book");

if(!$resultAll){
    die(mysqli_error($conn));
}

?>
