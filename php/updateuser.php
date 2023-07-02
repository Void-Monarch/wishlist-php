<?php

if(isset($_REQUEST['save'])){


$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$name = strtoupper($_REQUEST['name']);
$pass=$_REQUEST['pword'];
$fname=$_REQUEST['fna'];
$lname=$_REQUEST['lna'];

$connect = mysqli_connect('localhost','root','','db');

$query_select_ch = "select * from userlist where id=$id";
$result_select_ch = mysqli_query($connect,$query_select_ch);

    if($result_select_ch){
    $query_change = "update userlist set username='$name' where id=$id"; 
    $result_change = mysqli_query($connect,$query_change);

    $query_change = "update userlist set password='$pass' where id=$id"; 
    $result_change = mysqli_query($connect,$query_change);

    $query_change = "update userlist set f_name='$fname' where id=$id"; 
    $result_change = mysqli_query($connect,$query_change);

    $query_change = "update userlist set l_name='$lname' where id=$id"; 
    $result_change = mysqli_query($connect,$query_change);


    echo "<html><body><center style=margin-top:25% class=error_msg>DATA UPDATED <br><b>>>> wait !!  3sec!!</b></body></html>";
            header( "refresh:2; url=../admin/admin_manage.php?info=user" ); 
    }else{
        echo "<center style=margin-top:25% class=error_msg >Error! Now Try again <br>Redirecting in 3sec</center>";
        // header("Location: ../login/Login_frontend.php");
        header( "refresh:2; url=../admin/admin_manage.php?info=show" );
    }
    
}
    
