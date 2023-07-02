<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "connect.php";

            //validation  

    if(isset($_GET['submit'])){
        $uname=$_GET['username'];
        $pword=$_GET['password'];

        $uname=strtoupper($uname);

        //sql injection prevention
        $uname = mysqli_real_escape_string($connect,$uname);
        $pword = mysqli_real_escape_string($connect,$pword);


        if($uname==""){
            echo '<script>alert("User name is empty")</script>';
            die();
        }else{
            if($pword==""){
                echo '<script> alert("Enter your Password and try again.")</script> ';
                die();
            }
            }
    }


?>

<?php
            //login

if(isset($_GET['submit'])){
    
    $connect = mysqli_connect('localhost','root','','db');

    $query_select1 = "select username from userlist";

    $result_select1 = mysqli_query($connect,$query_select1);

    while($row = mysqli_fetch_assoc($result_select1)){

        if($uname==$row['username']){

                $query_select = "select * from userlist where username = '$uname' ";    
    

         $result_select = mysqli_query($connect,$query_select);


    $row = mysqli_fetch_assoc($result_select);

                    if($pword==$row['password']){

                    // start a session 
                        $_SESSION['uname']=$uname;
                        $_SESSION['pword']=$pword;
                        $_SESSION['f_name']=$row['f_name'];
                        $_SESSION['l_name']=$row['l_name'];


                        header("Location: ../Homepage/home-explore.php");

                    }

        }

    }
    echo '<script>alert("Wrong username or password"); window.location = "../login/Login_frontend.php#login-here";</script>';

}
?>