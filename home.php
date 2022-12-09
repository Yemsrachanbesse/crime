<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:index.php");
}
echo "welcome ";
echo $_SESSION['username'];
?>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
            <style>
        #hero{
            width: 100%;
            height:100vh;
            background-image:url(images/crime1.jpeg);
            background-size:cover;
            background-position: center;
            position:relative;
        }
        .navbar{
            width:90%;
            margin: auto;
            display:flex;
            align-items:center;
            justify-content:space-between;
            position:relative;
            z-index:10;
        }
        .navbar.logo{
            width:60%;
            margin:30px 0;
            cursor:pointer;
        }
        .user{
            border : 0px solid red;
            display:flex;
            align-items:center;
            margin-left:1187px;
        }
        .user img{
            width: 100px;
            margin-left:50px;
            cursor:pointer;
        }
        button{
            padding:8px 25px;
            background:transparent;
            outline:none;
            border:2px solid #fff;
            border-radius:20px;
            color: #fff;
            font-size:12px;
            font-weight:bold;
            cursor:pointer;
        }
        .container{
            border: 0px solid red;
            width:50%;
            height:60vh;
            margin-left: 200px;
            background:rgba(86,86,86,0.3);
            backdrop-filter:blury(10px);
            position:absolute:
            left:0;;
            top:0;
        }
        .info{
            width:550px;
            color:#fff;
            position:absolute;
            right:30%;
            top:30%;
            transform:translateX(-40%);
        }
        .info h1{
            font-size:60px;
            letter-spacing:10px;
        }
        .info p{
            color:#f0eef1;
            font-size:16px;
            margin:20px 0;
            line-height:18px;
        }
        .info input{
            width:50%;
            padding:8px 10px;
            outline:none;
            border-radius:28px;
            background:transparent;
            color:#fff;
            font-size:12px;

        }
        ::placeholder{
            color:#ccc;
        }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light  bg-primary" style="width: 100%;">
  <div class="container-fluid">
    <h class="navbar-brand" style="color: white;">Crime Report</h>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php" style="color: white;">Report</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="view.php" style="color: white; padding-left:">View Summary</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="logout.php">
        
        <button class="btn btn-outline-success" type="submit" style="color: white; border: 2px solid white;" >Logout</button>
      </form>
    </div>
  </div>
</nav>
        <div id="hero">
           <div class='navbar'>
                              
               <div class='user'>
                   <button type="button" > Add profile</button>
                   <img src="images/profile.jpeg" class='logo'> 
               </div>
           </div>
           <div class='container'>
              <div class="info">
                  <h1>Crime</h1>
                  <p>
                  Crime has been a baffling problem ever since the dawn of human civilization</br>
                and man’s efforts to grapple with this problem have only partially succeeded.</br> 
                There is hardly any society which is not beset with the problem of crime and criminality.</br>
                As rightly pointed out by Emile Durkheim, crime is a natural phenomenon</br> 
                which is constantly changing with the social change.
                  </p>
                  <input type="text" placeholder="search">
              </div>
           </div>
           <div class="slider">
            
           </div>
        </div>
    </body>
</html>