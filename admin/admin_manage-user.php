<?php 
include "../php/connect.php";
include "../php/login_db.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();   
}
include "../php/connect.php";

if(!isset($_SESSION['auth'])){
    header("Location: ../login/login_frontend.php#login-here");
}

// if(isset($_GET['submit'])){
    
    $connect = mysqli_connect('localhost','root','','db');

    $query_select1 = "select * from userlist";

    $result_select1 = mysqli_query($connect,$query_select1);

    echo "<tr>
    <th class='user_table_s-col-label'>User_id</th>
    <th class='user_table_s-col-label'>Username</th>
    <th class='user_table_s-col-label'>Password</th>
    <th class='user_table_s-col-label'>First Name</th>
    <th class='user_table_s-col-label'>Last Name</th>

    
</tr>" ;

    while($row = mysqli_fetch_assoc($result_select1)){

        $info_uname = $row['username'];
        $info_pword = $row['password'];
        $info_fname = $row['f_name'];
        $info_lname = $row['l_name'];
        $info_uid = $row['id'];
                
        echo "<tr>
                    <td>$info_uid</td>
                    <td>$info_uname</td>
                    <td>$info_pword</td>
                    <td>$info_fname</td>
                    <td>$info_lname</td>
                    
             </tr>"; }         
                     
    
?>