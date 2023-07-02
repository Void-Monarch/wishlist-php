<html>
    <head><title>ADMIN Page</title></head>
    <body>
<div class="container">
        <form action="frontend.php" method=post id=form1 name=form1 enctype="multipart/form-data">

        <div class=labelcon>
            <label for="username" class="label">
                Username 
            </label>
        </div>

            <input type="text" class="box1" name=username id=username placeholder="Enter Username"> <br>


        <div class=labelcon>    
            <label for="password" class="label">
                Password
            </label>
        </div>  

            <input type="password" class="box1" name='password' placeholder="Enter password"> <br><br>

        <div class=labelcon>    
            <label for="img" class="label">
                img
            </label>
        </div>  

            <input type="file" class="box1" name='img' placeholder="upload"> <br><br>

        <div class="bot_con">
            <input type="submit" class="button1" name=submit > <br><br>
        </div>
        <div class="drop">
            <input type="submit" value="Drop" class="button1" name=drop >
        </div>

        

        </form>
</div>


    </body>
</html>
<?php
include "connect.php";
include 'database.php';


?>