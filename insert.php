<?php

$host = "127.0.0.1:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mysql";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die();
}
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $Insert = "INSERT INTO user_details(username, email, dob, gender, password) values($username,$email,$dob,$gender,$password)";
    if(mysqli_query($conn,$Insert))
    {
        echo "New records entered successfully";
    }else{
        echo "error: " .$sql. "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>