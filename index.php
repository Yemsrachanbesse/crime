<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        #loginComponent{
            border: 0px solid red;
            width: 400px;
            padding: 10px;
            Margin:70px  auto;
            
        }
        body{
            background-image:url(images/crime1.jpeg);
        }

    </style>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <h class="navbar-brand"  style="color: white;">Crime Report Management</h>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <form class="d-flex" method="POST" action="signup.php">
                   
                    <button class="btn btn-outline-success" type="submit" style="margin-left: 1150px; margin-top: 10px; color: black; color:white" >Signup</button>
                </form>
                </div>
            </div>
</nav>
<div id="loginComponent">
<form action="login.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: white">Username</label>
            <input type="text" class="form-control" id="username" name="username">
            <div id="emailHelp" class="form-text" style="color: silver">We'll never share your Username with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: white">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" method="POST" action="home.php" >Login</button>
</form>
</div>
    </body>
</html>