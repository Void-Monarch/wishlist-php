<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "connect.php";
$uname=$_SESSION['uname'];


$connect = mysqli_connect('localhost','root','','db');

$query_select_cu = "select c_id from userlist where username='$uname' ";
$result_select_cu = mysqli_query($connect,$query_select_cu);
$row_c=mysqli_fetch_assoc($result_select_cu);
$row_c['c_id'];
$ar_row=str_replace(',','',$row_c['c_id']);
$ar_row=trim($row_c['c_id'],',');
$ar_row=explode(",",$row_c['c_id']);
foreach($ar_row as $value_u){

$query_select_c = "select * from content where c_id='$value_u'";
$result_select_c = mysqli_query($connect,$query_select_c);

while($row = mysqli_fetch_assoc($result_select_c)){
 
    $c_name=$row['c_name'];
    $c_link=$row['c_link'];
    $c_img=$row['c_img'];
    $c_epi=$row['c_epi'];
    $c_text=$row['c_content'];
    $c_category=$row['c_category'];
    $c_name_pop= strtr($c_name,[' ' => '']);

    echo '
        <div class="col-1-of-4-s">
                <div class="tile_block">
                    <div class="tile_block_img" id="user-tile_'.$c_name_pop.'">
                    <a href=#user-popup_'.$c_name_pop.'>
                        <img src='.$c_img.' alt="" class="tile_block_img-tag">
                    </div>
                    <div class="tile_block_title">
                        <h4 class="tile_block_title-head">
                            '.$c_name.'
                        </h4>
                    </div>
                </div>
            </a>
        </div>
            ';


}    
}

?>
