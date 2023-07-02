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


    
    $connect = mysqli_connect('localhost','root','','db');

    $query_select1 = "select * from userlist";

    $result_select1 = mysqli_query($connect,$query_select1);

    echo "
    <tr>
    <th class='user_table_s-col-label'>User_id</th>
    <th class='user_table_s-col-label'>Username</th>
    <th class='user_table_s-col-label'>Password</th>
    <th class='user_table_s-col-label'>First Name</th>
    <th class='user_table_s-col-label'>Last Name</th>
    <th class='user_table_s-col-label'>Save</th>

    
</tr>" ;

    while($row = mysqli_fetch_assoc($result_select1)){

        $info_uname = $row['username'];
        $info_pword = $row['password'];
        $info_fname = $row['f_name'];
        $info_lname = $row['l_name'];
        $info_uid = $row['id'];
                
        echo "<form action='../php/updateuser.php' > 
        <tr><input type=text name=id value=$info_uid style=visibility:hidden >
                    <td>$info_uid</td>
                    <td><input type=text name=name value=$info_uname></td>
                    <td><input type=text name=pword value=$info_pword></td>
                    <td><input type=text name=fna value=$info_fname></td>
                    <td><input type=text name=lna value=$info_lname></td>
                    <td><input type=submit name=save value=save></td>
             </tr></form>"; }         

?>

<!-- <td><a href=../php/updateuser.php?id=$info_uid&name=$info_uname&pass=$info_pword&fname=$info_fname&lname=$info_lname >save</a> </td> -->
