<?php   
    //to connect with a database
   $servername='localhost';
   $username='root';
   $password='';
   $dbname='crimeManagement';


   try{
       $conn=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       echo "Connected!!!<br>";
   }catch(PDOException $p){
       echo $p->getMessage();
   }
 
?>