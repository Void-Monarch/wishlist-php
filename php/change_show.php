<?php 
include "../php/connect.php";
include "../php/login_db.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();   
}

if(isset($_REQUEST['submit'])){
    $c_id=$_REQUEST['c_id'];
    $ch_c_name=$_REQUEST['c_name'];
    $ch_c_epi=$_REQUEST['c_epi'];
    $ch_c_content=$_REQUEST['c_content'];

        $connect = mysqli_connect('localhost','root','','db');

$query_select_ch = "select * from content where c_id=$c_id ";
$result_select_ch = mysqli_query($connect,$query_select_ch);

    while($row = mysqli_fetch_assoc($result_select_ch)){

        
            $query_change = "update content set c_name = '$ch_c_name' where c_id =$c_id "; 
            $result_change = mysqli_query($connect,$query_change);
            $query_change = "update content set c_epi = '$ch_c_epi' where c_id =$c_id "; 
            $result_change = mysqli_query($connect,$query_change);
            $query_change = "update content set c_content = '$ch_c_content' where c_id =$c_id "; 
            $result_change = mysqli_query($connect,$query_change);
            
        
            echo "<html><body><center style=margin-top:25% class=error_msg>DATA UPDATED <br><b>>>> wait !!  3sec!!</b></body></html>";
            header( "refresh:2; url=../admin/admin_manage.php?info=show" ); 
            // header("Location: ");
            
    
        }
        
    }
    else{
        echo "<center style=margin-top:25% class=error_msg >Error! Now Try again <br>Redirecting in 3sec</center>";
        // header("Location: ../login/Login_frontend.php");
        header( "refresh:2; url=../admin/admin_manage.php?info=show" );
    }
