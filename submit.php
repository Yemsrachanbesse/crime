<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$gender=$_POST['gender'];
$crimetype=$_POST['crimetype'];
$crimelocation=$_POST['Crimelocation'];
$woreda=$_POST['woreda'];
$kebele=$_POST['kebele'];
$specificloc=$_POST['specificloc'];
$optional=$_POST['optional'];
$conn=new mysqli('localhost','root','','crimeManagement');
if($conn->connect_error){
    die('connection Failed : '.$conn -> connect_error);
}else{
    $stml=$conn -> prepare("insert into report(fname, lname, email, pnumber, gender,crimetype,crimelocation,woreda,kebele,specificloc,optional) values(?, ?, ?, ?, ?, ?, ?,?,?,?,?)");
    $stml->bind_param("sssisssssss",$fname, $lname, $email, $pnumber, $gender,$crimetype,$crimelocation,$woreda,$kebele,$specificloc,$optional);
    $stml->execute();
    echo "Registration successfully...";
    $stml->close();
    $conn->close();
}
?>

