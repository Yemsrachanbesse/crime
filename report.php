<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("Location:index.php");
}

?>
<html>
    
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
         body{
        background-image:url(images/crime1.jpeg);
        background-position:center;
        background-size:cover;
        font-family:sans-serif;
        margin-top:0px;
    }
    .reportform{
        width:800px;
        background-color: rgb(0,0,0,6);
        margin:auto;
        color:#FFFFFF;
        padding:10px 0px 10px 0px;
        text-align:center;
        border-radius:15px 15px 0px 0px;

    }
    .main{
        background-color: rgb(0,0,0,0.5);
        width:800px;
        margin:auto;
    }
    form
    {
        padding:10px;
    }
    td{
        color:white;
    }
    textarea{
        width: 200px;
        padding:50px;
    }
    </style>
<script type="text/javascript" src="validate.js"></script>
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
          <a class="nav-link" href="#" style="color:black;">Report</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="view.php" style="color: white; padding-left:">View Summary</a>
        </li>
      </ul>
      <form class="d-flex"method="post" action="logout.php">
        
        <button class="btn btn-outline-success" type="submit" style="color: white; border: 2px solid white;" >Logout</button>
      </form>
    </div>
  </div>
</nav>
        <div class="reportform"><h1>Crime report form</h1> </div>
        <div class="main">
          <form action="submit.php" method="post">
          <table>
            <tr> 
                <td >Firstname</td>
                <td><input type="text" placeholder="Enter your first name" id="fname" name="fname"required ></td>
            </tr>
            <tr> 
                <td>Lastname</td>
                <td><input type="text" placeholder="Enter your Last name" id="lname" name="lname"required ></td>
            </tr>
            <tr> 
                <td>E-mail</td>
                <td><input type="email" placeholder="Enter your Email" id="email" name="email" required ></td>
            </tr>
            <tr> 
                <td>Phone-number</td>
                <td><input type="text" placeholder="Enter your Phone number" id="pnumber" name="pnumber" required ></td>
            </tr>
            <tr> 
               <td>Gender</td>
                <td><input type="radio" value="Male" id="msex" name="gender" required >Male
                    <input type="radio" value="Female" id="fsex" name="gender" required >Female</td>
            </tr> 
            <tr>
            <td>Choose Type of Crime</td>
            <td><select name="crimetype" required >
                <option value="-1" selected>select..</option>
                <option value="Petty-teft">Petty-teft</option>
                <option value="Murder">Murder</option>
                <option value="Rape">Rape</option>
                <option value="Hit and run">Hit and run</option>
                <option value="Assult">Assult</option>
                <option value="Domestic-abuse">Domestic-abuse</option>
                <option value="terrorism">terrorism</option>
                 </select></td>
            </tr>
            <tr> 
            <td>Crime location</td>
                <td><select name="Crimelocation" required>
                <option value="-1" selected>Sub-city</option>
                <option value="addisketema">addisketema</option>
                <option value="akakykality">akakykality</option>
                <option value="arada">arada</option>
                <option value="bole">bole</option>
                <option value="gullele">gullele</option>
                <option value="kolfekeranio">kolfekeranio</option>
                <option value="lemikura">lemikura</option>
                <option value="lideta">lideta</option>
                <option value="kirkos">kirkos</option>
                <option value="nifassilklafto">nifassilklafto</option>
                <option value="yeka">yeka</option>
                </select></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" placeholder="Woreda" id="woreda" name="woreda" >
                    <input type="text" placeholder="kebele" id="kebele" name="kebele" >
                    <input type="text" placeholder="Enter crime-specific location" id="specific" name="specificloc" >
            
            
            </td>
            </tr>
            <tr>
                <td>Description(optional)</td>
                <td><textarea id="optional" name="optional"> </textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                </td>
            </tr>
                        
        </table>
          </form>
        </div>
    </body>
</html>
