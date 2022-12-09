<?php 
if(isset($_POST['submit'])){
  $crimetype = $_POST['Crimelocation'];
  if(!empty($Crimelocation)){
      $query = "INSERT INTO report (Crimelocation) VALUES('$Crimelocation')";
      $result = $conn->query($query);
      if($result){
        echo "crime type is inserted successfully";
      }  
    }
  }

?>