<?php
session_start();
$uname=$_SESSION['uname'];

function mydel($uname,$c_id,$c_name_pop) {

$connect = mysqli_connect('localhost','root','','db');

$query_select_w = "select * from userlist where username='$uname'";
$result_select_w = mysqli_query($connect,$query_select_w);

while($row = mysqli_fetch_assoc($result_select_w)){

    if($uname==$row['username']){

            $query_select = "select c_id from userlist where username = '$uname' ";    


     $result_select = mysqli_query($connect,$query_select);


$row = mysqli_fetch_assoc($result_select);
$p_c_id=$row['c_id'];
$c_id_new= str_replace($c_id,"",$p_c_id);
$c_id_new= str_replace($c_id," ",$p_c_id);
$c_id_new= rtrim($c_id_new);
$c_id_new= ltrim($c_id_new);
$c_id_new= str_replace(",,",'',$c_id_new);


$query_select_add = "update userlist set c_id = '$c_id_new' where username='$uname'";
$result_select_add = mysqli_query($connect,$query_select_add);

header("Location: ../wishlist/user-wishlist.php#user-popup_$c_name_pop");
unset($_SESSION['c_id']);

}}}

$c_id=$_REQUEST['c_id'];
$c_name_pop=$_REQUEST['c_name_pop'];
mydel($uname,$c_id,$c_name_pop);


?>