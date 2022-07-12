<?php

$hostname = "127.0.0.1:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mysql";

$conn = new mysqli($hostname, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die();
}
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];

    $Insert = "INSERT INTO useit(fname,lname, email, password, cfpassword) values($fname,$lname, $email, $password, $cfpassword)";
    if(mysqli_query($conn,$Insert))
    {
        echo "New records entered successfully";
    }else{
        echo "error: " .$sql. "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>