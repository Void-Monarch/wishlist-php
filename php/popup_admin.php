<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    
}
include "connect.php";
$uname=$_SESSION['uname'];

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


    echo '<form action="../php/change_show.php" method="post"><input type=text value='.$c_id.' style=visibility:hidden; name=c_id>
    <div class="popup" id="popup_'.$c_name_pop.'">
        <div class="popup_content">
            <div class="popup_left">
                <img src="'.$c_img.'" alt="" class="popup_img">
                <div class=popup_detail >Episode :<input type=text value='.$c_epi.' name=c_epi class=form_input></div>
            </div>
            <div class="popup_right">
                <a href="#tile_'.$c_name_pop.'" class="popup_close icofont-close">&nbsp</a>
                <div class="bgclip"><input type=text value="'.$c_name.'" name=c_name class="form_input" ></div>
                <h3 class="heading_tri"></h3>
                <p class="popup_text">
                <textarea name=c_content cols=100 rows=10> '.$c_text.' </textarea>
                </p>
                <input type=submit class="btn form-btn-submit btn-popup" style=left:40rem;top:25rem name=submit value="Update &nbsp"></a>
                <a href="../php/delete_show.php?delete='.$c_id.'" class="btn btn-popup" >Delete the post <i class="icofont-close-circled"></i></a>
            </div>
        </div>
    </div></form>
    ';
}
?>