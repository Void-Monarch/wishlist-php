<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    
}
include "connect.php";
$uname=$_SESSION['uname'];

if(!isset($_SESSION['uname'])){

    $li="../login/Login_frontend.php#login-here";
    $icon="ui-lock";

}

$connect = mysqli_connect('localhost','root','','db');

$query_select_c = "select * from content";

$result_select_c = mysqli_query($connect,$query_select_c);

while($row = mysqli_fetch_assoc($result_select_c)){

    $wish='Add to Wishlist';
    $c_name=$row['c_name'];
    $c_id=$row['c_id'];
    $c_link=$row['c_link'];
    $c_epi=$row['c_epi'];
    $c_img=$row['c_img'];
    $c_text=$row['c_content'];
    $c_category=$row['c_category'];
    $c_name_pop= strtr($c_name,[' ' => '']);


    $query_select_w = "select * from userlist where username='$uname'";
$result_select_w = mysqli_query($connect,$query_select_w);

while($row = mysqli_fetch_assoc($result_select_w)){

    $query_select = "select c_id from userlist where username = '$uname' ";    
    $result_select = mysqli_query($connect,$query_select);


$row = mysqli_fetch_assoc($result_select);
$p_c_id=$row['c_id'];
$seperator=",";

$flag=0;
$icon='plus';
$li="../wishlist/wishlist.php?c_id=".$c_id."&c_name_pop=".$c_name_pop;

$arr_c_id=explode($seperator,$p_c_id);

foreach($arr_c_id as $value){

    if($c_id==$value){
        $flag=1;
        $wish='Wishlisted';
        $icon='verification-check';
        $li="../wishlist/remove.php?c_id=".$c_id."&c_name_pop=".$c_name_pop;
    }
}

}


    echo '<form>
    <div class="popup" id="popup_'.$c_name_pop.'">
        <div class="popup_content">
            <div class="popup_left">
                <img src="'.$c_img.'" alt="" class="popup_img">
                <div class=popup_detail >Episode : '.$c_epi.'</div>
            </div>
            <div class="popup_right">
                <a href="#tile_'.$c_name_pop.'" class="popup_close icofont-close">&nbsp</a>
                <div class="bgclip"><h2 class="heading_secondary">'.$c_name.'</h2></div>
                <h3 class="heading_tri"></h3>
                <p class="popup_text">
                '.$c_text.'
                </p>
                <a href="'.$c_link.'" target=_blank class="btn btn-popup">Watch &nbsp<i class="icofont-circled-right"></i></a>
                <a href='.$li.' class="btn btn-popup"> '.$wish.' <i class="icofont-'.$icon.'"></i></a>
            </div>
        </div>
    </div></form>
    ';
}
?>