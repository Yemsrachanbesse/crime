<?php 
        session_start();
        include("database.php");

        $uname=$_POST["username"];
        $pass=$_POST["password"];

        $sql="SELECT * FROM `users` WHERE `username`=? and `password`=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$uname,$pass]);

        if($stmt->rowCount()==1)
        {
            echo "User found...go to main page";
            $_SESSION['username']=$uname;
            header("Location: home.php");
        }
        else
        {
            echo"Error, invalid username and password";
            header("Location: index.php");
        }

        //echo "$sql";
        

?>