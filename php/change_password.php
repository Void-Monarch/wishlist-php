<?php 
include "../php/connect.php";
include "../php/login_db.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();   
}
$uname=$_SESSION['uname'];

if(!isset($_SESSION['auth'])){
   
if(isset($_REQUEST['submit-change_pword'])){

    if($_REQUEST['password_old']==$_SESSION['pword']){

        $connect = mysqli_connect('localhost','root','','db');

$query_select_ch = "select * from userlist where username='$uname'";
$result_select_ch = mysqli_query($connect,$query_select_ch);

    while($row = mysqli_fetch_assoc($result_select_ch)){

        if($row['password']==$_REQUEST['password_old']){
            $ch_p = $_REQUEST['change_p'];
            $query_change_pword = "update userlist set password = '$ch_p' where username = '$uname'"; 
            $result_change_pword = mysqli_query($connect,$query_change_pword);
            echo "<html><body><center style=margin-top:25% class=error_msg>PASSWORD CHANGED <br><b>wait !! >>> 5sec!!</b></body></html>";
            header( "refresh:2; url=../login/Login_frontend.php" ); 
            // header("Location: ");
            
    
        }
        
    }
    }else{
        echo "<center style=margin-top:25% class=error_msg >Error wrong password! Now login again <br>Redirecting on 5sec</center>";
        // header("Location: ../login/Login_frontend.php");
        header( "refresh:2; url=../login/Login_frontend.php" );
    }
}
}

if(isset($_SESSION['auth'])){
    
    if(isset($_REQUEST['submit-change_pword'])){

    if($_REQUEST['password_old']==$_SESSION['pword']){

        $connect = mysqli_connect('localhost','root','','db');

$query_select_ch = "select * from admin_table where username='$uname'";
$result_select_ch = mysqli_query($connect,$query_select_ch);

    while($row = mysqli_fetch_assoc($result_select_ch)){

        if($row['password']==$_REQUEST['password_old']){
            $ch_p = $_REQUEST['change_p'];
            $query_change_pword = "update admin_table set password = '$ch_p' where username = '$uname'"; 
            $result_change_pword = mysqli_query($connect,$query_change_pword);
            echo "<html><body><center style=margin-top:25% class=error_msg>PASSWORD CHANGED <br><b>wait !! >>> 5sec!!</b></body></html>";
            session_destroy();

            session_start();
            header( "refresh:2; url=../admin/admin_login.php" ); 

            // header("Location: ");
            
    
        }
        
    }
    }else{
        echo "<center style=margin-top:25% class=error_msg >Error wrong password! Now login again <br>Redirecting on 5sec</center>";
        session_destroy();

        session_start();
        // header("Location: ../login/Login_frontend.php");
        header( "refresh:2; url=../admin/admin_login.php" );
    }
}
}
    