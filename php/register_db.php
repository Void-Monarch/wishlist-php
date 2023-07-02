<?php 
include "connect.php";


            //validation 

    if(isset($_POST['submit'])){
        $uname=$_POST['username'];
        $pword=$_POST['password'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $email=$_POST['email'];

        //Uppercaseing all usernames.
        
        $uname=strtoupper($uname);
        
        $f_name=strtolower($f_name);
        $l_name=strtolower($l_name);

        //sql injection prevention
        $uname = mysqli_real_escape_string($connect,$uname);
        $pword = mysqli_real_escape_string($connect,$pword);
        $f_name= mysqli_real_escape_string($connect,$f_name);
        $l_name= mysqli_real_escape_string($connect,$l_name);
        $email = mysqli_real_escape_string($connect,$email);


    if($uname==""){
            echo '<script>alert("User name is empty")</script>';
            die();
        }else{
            if(!$f_name){
                echo '<script>alert("First Name is empty")</script>';
                die();
            }else{
                if(!$l_name){
                    echo '<script>alert("Last name is empty")</script>';
                    die();
                }
            }
        }
    }


?>

<?php
            //CREATION

if(isset($_POST['submit'])){
    $connect = mysqli_connect('localhost','root','','db');
 
    $query = "INSERT into userlist(username,password,f_name,l_name,email) values ('$uname','$pword','$f_name','$l_name','$email')";
    $result = mysqli_query($connect,$query);

    if(!$result){
        echo "error";
    }
    
    if($result){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

                        $_SESSION['uname']=$uname;
                        $_SESSION['pword']=$pword;
                        $_SESSION['f_name']=$f_name;
                        $_SESSION['l_name']=$l_name;

        echo '<script> alert("You were Successfully REGISTERED!!"); window.location = "../Homepage/homepage.php"; </script>';
    } 

}
?>