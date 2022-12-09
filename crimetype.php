<?php 
if(isset($_POST['submit'])){
  $crimetype = $_POST['crimetype'];
  if(!empty($crimetype)){
      $query = "INSERT INTO report (crimetype) VALUES('$crimetype')";
      $result = $conn->query($query);
      if($result){
        echo "crime type is inserted successfully";
      }  
    }
  }

?>