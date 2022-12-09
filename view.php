<?php
include("database.php");
?>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php

?>
<nav class="navbar navbar-expand-lg navbar-light  bg-primary" style="width: 100%;">
  <div class="container-fluid">
    <h class="navbar-brand" style="color: white;">Crime Report</h>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php" style="color: white;">Report</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="" style="color: black; padding-left:">View Summary</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="logout.php">
        
        <button class="btn btn-outline-success" type="submit" style="color: white; border: 2px solid white;" >Logout</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>
