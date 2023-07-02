<?php 
include "connect.php";

//validation 

    if(isset($_POST['submit'])){
        $uname=$_POST['username'];
        $pword=$_POST['password'];



        if($uname==""){
            echo 'User name is empty';
            die();
        }else{
            if($pword==""){
                echo 'Enter your Password and try again. ';
                die();
            }else{
                    echo "Your Username is ". $uname . "<br>";
                    echo "Your Password is ". $pword;
                }
            }
    }


?>

<?php
//updation

if(isset($_POST['submit'])){
    $connect = mysqli_connect('localhost','root','','db');
 
    echo "<br><BR>we are connected";

    $query = "INSERT into userlist(username,password) values ('$uname','$pword')";
    $result = mysqli_query($connect,$query);
    $result_new = mysqli_query($connect,'SELECT * from userlist');

    move_uploaded_file($_FILES['img'],'../assests/');
    
    if($result){
        echo '<br>Records were successfully created!!';
    }else{
        echo "Error has occured";
       
    }

}
?>

<?php
// drop database && Recreate a blank database & Table

    if(isset($_POST['drop'])){
        $query_drop = 'drop tables userlist ';
        $result_drop = mysqli_query($connect,$query_drop);
        if($result_drop){
            echo '!!database dropped!!';

            // $query_create = 'create database db';
            
            $connect_new = mysqli_connect('localhost','root','','db');

            // $result_create = mysqli_query($connect_new,$query_create);
            // if($result_create){
                // echo '<BR><BR>!!!A blank Database has been created again!!!<br>';
                // mysqli_query($connect_new,"use db ");

                $query_create_table = "create table userlist(id int(3) primary key auto_increment,
                username varchar(225) unique key ,
                password varchar(335),f_name varchar(300),l_name varchar(255),email varchar(335),c_id varchar(225)
                )";
                
                $result_create_table = mysqli_query($connect_new,$query_create_table);

                if(isset($result_create_table)){

                    echo '!!!!Blank Table has been created!!!! ';
                }

            }
        }
    // }
?>



