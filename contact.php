<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn=mysqli_connect("localhost","root","","moviedb");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql="INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
if(mysqli_query($conn,$sql))
{
    echo"Record Inserted Successfully";
}
$resultAll=mysqli_query($conn,"Select * From contact");
if(!$resultAll)
{
    die(mysqli_error($conn));
}
}
?>