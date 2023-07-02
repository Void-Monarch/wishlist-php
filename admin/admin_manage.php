<?php 
include "../php/connect.php";
include "../php/login_db.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();   
}
if(isset($_REQUEST['search'])){
$search=$_REQUEST['search'];
$_SESSION['search']=$search;
}

if(!isset($_SESSION['auth'])){
    header("Location: ../login/login_frontend.php#login-here");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore | Wishlist</title>
    <link rel="stylesheet" href="../css/home-css.css">
    <link rel="stylesheet" href="../Assests/icons/linea_complete_1/_basic/_ICONFONT/styles.css">
    <link rel="stylesheet" href="../Assests/icons/icofont/icofont.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato">
    
</head>
<body class="body_explore">


<!-- Navigation     -->
<div class="navigation">
<input type="button" href="#" onclick="history.back();" class="btn form-btn-submit btn-popup" value="&#8592 Back">
        <input type="checkbox" name="navi-toggle" class="navigation_checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation_button">
            <span class="navigation-lines">&nbsp</span>
        </label>

        <div class="navigation_background">&nbsp</div>
        <nav class="navigation_nav">
            <ul class="navigation_list">
                <li class="navigation_item"><a href="../Homepage/homepage.php" class="navigation_link-nav"><span class="navigation-icon icofont-ui-home">&nbsp</span>Home</a></li>
                <li class="navigation_item"><a href="<?php if(!isset($_SESSION['uname'])){ echo "../login/Login_frontend.php#login-here"; } else{echo "../php/logout.php";} ?>" class="navigation_link-nav"><span class="navigation-icon <?php if(!isset($_SESSION['uname'])){ echo "icofont-login"; } else{echo "icofont-logout";}?>">&nbsp</span><?php if(!isset($_SESSION['uname'])){ echo "Login"; } else{echo "Log out";} ?></a></li>
                <li class="navigation_item"><a href="../Homepage/home-explore.php" class="navigation_link-nav"><span class="navigation-icon icofont-memorial">&nbsp;</span>All shows</a></li>
                <li class="navigation_item"><a href="<?php if(!isset($_SESSION['uname'])){ echo "../login/Login_frontend.php#login-here"; } else{echo "../wishlist/user-wishlist.php";} ?>" class="navigation_link-nav"><span class="navigation-icon icofont-library">&nbsp;</span>Wishlist</a></li>

            </ul>
        </nav>


<div class="navigation_2">
        <input type="checkbox" name="navi-toggle_2" class="navigation_2_checkbox" id="navi-toggle_2">

        <label for="navi-toggle_2" class="navigation_2_button">
            <span class="navigation_2-lines"><i class="navigation_2_usericon icofont-user">&nbsp</i></span>
        </label>
        <span class="navigation_2_username"><?php if(isset($_SESSION['uname'])){ echo $_SESSION['uname'] ;}?></span>

        <div class="navigation_2_background">&nbsp</div>
        <nav class="navigation_2_nav">
        <ul class="navigation_2_list">
                <li class="navigation_2_item"><a href="../Homepage/user-account.php" class="navigation_2_link-nav"><span class="navigation_2-icon icofont-id">&nbsp</span>Account Details</a></li>
                <li class="navigation_2_item"><a href="<?php if(!isset($_SESSION['uname'])){ echo "#"; } else{echo "#";} ?>" class="navigation_2_link-nav"><span class="navigation_2-icon icofont-ui-settings">&nbsp</span>Setting</a></li>
                <li class="navigation_2_item"><a href="../Homepage/home-explore.php" class="navigation_2_link-nav"><span class="navigation_2-icon"></span></a></li>
                <li class="navigation_2_item"><a href="<?php if(!isset($_SESSION['uname'])){ echo "../login/Login_frontend.php#login-here"; } else{echo "#";} ?>" class="navigation_2_link-nav"><span class="navigation_2-icon"></span></a></li>

            </ul>
        </nav>
</div>

</div>

<section class="section-cata">

<div class="users-btn ">
    <a href="?info=user" class="btn btn-white btn-list btn-list-user">User List</a>&nbsp;&nbsp;&nbsp
    <a href="?info=show" class="btn btn-white btn-list btn-list-show">Shows list</a>&nbsp;&nbsp;&nbsp;
    <?php if($_REQUEST['info']=='user'){
   echo "  <a href='?info=edit' class='btn btn-white btn-list btn-list-show'>Enable Edit</a>"; } ?>
</div>

<!-- manage -->
<?php  $li="../php/addshow.php#popup_adduser";
           
           if($_REQUEST['info']=='user' or $_REQUEST['info']=='edit'){  
                 echo " <div class='section-cata-div'><BR>
                 <h2 class='section-user-ex'>
                         User List
                 </h2>
             </div>       
<div class='form_container'>
<div class='user_table'>
                <table class='user_table_s' border=2px >";} ?>       
        <?php  
             if($_REQUEST['info']=='user'){  
                include '../admin/admin_manage-user.php';}        
        ?>

        <?php  
             if($_REQUEST['info']=='edit'){  
                include '../admin/admin_manage-user-edit.php';}        
        ?>
             <?php echo "</table>" ; ?> 

<?php     if($_REQUEST['info']=='show'){ 
        include '../admin/admin_manage-show.php';}
?>