<?php

$server= "localhost";
$username="root";
$password="";
$dbname="Hos";


$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}
//start

$name = $_POST['Name'];
$contact=$_POST['Contact'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$sql = "INSERT INTO `patient`(`Name`, `Contact`, `Email`, `Password`) VALUES ('$name','$contact','$email','$password')";
$result = mysqli_query($con , $sql);

if($result)
{
    echo "Registered successfully";
}
else
{
    echo "Error 404!!!!!";
}
?>