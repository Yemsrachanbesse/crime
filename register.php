<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$phonenumber=$_POST['phonenumber'];
$gender=$_POST['gender'];
$choose=$_POST['choose'];
$conn=new mysqli('localhost','root','','crimeManagement');
if($conn->connect_error){
    die('connection Failed : '.$conn -> connect_error);
}else{
    $stml=$conn -> prepare("insert into users(firstname, lastname, username, password, phonenumber,gender,choose) values(?, ?, ?, ?, ?, ?, ?)");
    $stml->bind_param("ssssiss",$firstname, $lastname, $username, $password, $phonenumber,$gender,$choose );
    $stml->execute();
    echo "Registration successfully...";
    $stml->close();
    $conn->close();
}
?>