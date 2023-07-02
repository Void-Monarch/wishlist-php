<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_REQUEST['search'])){
$search=$_SESSION['search'];}

if(isset($_REQUEST['cate'])){
$cate=$_REQUEST['cate'];}

if(isset($search)){
$search= str_replace("+"," ",$_SESSION['search']);
$search = '%'.$search.'%';
}

include "connect.php";


$connect = mysqli_connect('localhost','root','','db');

$query_select_c = "select * from content";

if(isset($search)){
if(str_word_count($search)>=1){
    $query_select_c = "select * from content where c_tags like '$search'";
}}

if(isset($cate)){
    $query_select_c = "select * from content where c_category like '$cate'";
}

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
                    <div class="tile_block_img" id="tile_'.$c_name_pop.'">
                    <a href=#popup_'.$c_name_pop.'>
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

?>
