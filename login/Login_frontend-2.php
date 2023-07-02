<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Wishlist</title>
    <link rel="stylesheet" href="../css/css_login.css" >

    </head>

    <body background="/Files/login/cover%20op1.png" style="background-repeat: no-repeat;background-size: cover; ">

<div class="container">
        <form action="Login_frontend.php" method=post id=form1 name=form1 >
    
        <header class="head-pri">
            <div class="head-box">
            <h1 class="head-pri-con">
                Login
            </h1></div>
        </header>

    
        <div class="box5">
        <img src="/Files/login/box2.png"  class="box_blur" height=380px width=350px>
        </div>
        
        
        <div class='labelcon'>

            <label for="username" class="label" >
                Username 
            </label>
        </div>

            <input type="text" class="box1" name=username id=username placeholder="Enter Username" required> <br><br>


        <div class=labelcon>    
            <label for="password" class="label">
                Password
            </label>
        </div>  

            <input type="password" class="box1" id=passinput name='password' placeholder="Enter password" required> <br><br>

        <div class="bot_con">
            <input type="submit" class="button1" name=submit value=Login > <br><br>
        </div>
        
        </form>
</div>


    </body>
</html>
<?php
include "connect.php";
include 'login_db.php';


?>