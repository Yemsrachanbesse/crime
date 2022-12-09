<?php
?>
<html>
    <head>
<style>
    body{
        background-image:url(images/crime1.jpeg);
        background-position:center;
        background-size:cover;
        font-family:sans-serif;
        margin-top:40px;
    }
    .regform{
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
    #name{
        width:100%;
        height:100px;
    }
    .name{
        margin-left:25px;
        margin-top:30px;
        width:125px;
        color:white;
        font-size:18px;
        font-weight:700;
    }
    .firstname{
        position:relative;
        left:200px;
        top:-37px;
        line-height:40px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
    }
    .lastname{
        position:relative;
        left:417px;
        top:-80px;
        line-height:40px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
        color:#555;
    }
.firstlable{
    position:relative;
    color:#E5E5E5;
    text-transform:capitalize;
    font-size:14px;
    left:203;
    top:-45px;

}
.lastlable{
    position:relative;
    color:#E5E5E5;
    text-transform:capitalize;
    font-size:14px;
    left: 175px;
    top:-47px;
}
.choose{
    position:relative;
    left:200px;
    top:-37px;
    line-height:40px;
    width:532px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px
    color:#555;
}
.username{
    position:relative;
    left:200px;
    top:-37px;
    line-height:40px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px
    color:#555;
}
.Password{
    position:relative;
    left:200px;
    top:-37px;
    line-height:40px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px
    color:#555;
}
.phone{
    position:relative;
    left:200px;
    top:-37px;
    line-height:40px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px
    color:#555;
}
.option{
    position:relative;
    left:200px;
    top:-37px;
    line-height:40px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px
    color:#555;
    outline:none;
    overflow:hidden;
}
button{
    background-color: #3BAF9F;
    display:block;
    margin: 20px 100px 0px 200px;
    text-align: center;
    border-radius:12px;
    border: 2px solid#366473;
    padding:14px 110px;
    outline: none;
    color:white;
    cursor:pointer;
    transition:0.25px;
}
button:hover{
    background-color:#5390F5;
}
label{
    color:white;
}


</style>
    </head>
    <body>
        <div class="regform"><h1>Registration form</h1> </div>
        <div class="main">
          <form action="register.php" method="post">
             <div id=name>
              <h2 class='name'>Name</h2>
              <input class="firstname" type='text' name="firstname" id="firstname" required ><br>  
              <lable class="firstlable">First name</lable>
              <input class="lastname" type='text' name='lastname' id="lastname" required>
              <lable class='lastlable'>Last name</lable>
            </div>
            <h2 class='name'>Username</h2>
            <input class='username' type='text' name='username'id="username" required>
            <h2 class='name'>Password</h2>
            <input class='password' type='password' name='password' id="password" required>
            <h2 class='name'>Phone number</h2>
            <input class='phone' type='text'name="phonenumber" id="phonenumber" required>
            <h2 class='name'>Gender</h2>
            <label for="male" class="phone"
                    ><input
                      type="radio"
                      name="gender"
                      id="male"
                      value="M"
                    />Male</label
                  >
                  <label for="female" class="phone"
                    ><input
                      type="radio"
                      name="gender"
                      id="female"
                      value="F"
                    />Female</label
                  >
            <h2 class='name'>choose</h2>
            <select class='option' name="choose" id="choose">
                <option disabled='disabled' selected='selected'>---choose option</option>
                <option> user</option>
                <option> Admin</option>                
            </select>
        <button type="submit">Register</button>
          </form>
        </div>
    </body>
</html>