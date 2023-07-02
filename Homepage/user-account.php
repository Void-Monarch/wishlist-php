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

if(!isset($_SESSION['uname'])){
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
<body >

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
        <span class="navigation_2_username"><?php echo $_SESSION['uname'] ;?></span>
        <div class="navigation_2_background">&nbsp</div>
        <nav class="navigation_2_nav">
        <ul class="navigation_2_list">
                <li class="navigation_2_item"><a href="#" class="navigation_2_link-nav"><span class="navigation_2-icon icofont-id">&nbsp</span>Account Details</a></li>
                <li class="navigation_2_item"><a href="<?php if(!isset($_SESSION['auth'])){ echo "#"; } if($_SESSION['auth']>=1){echo "../admin/admin_manage.php?info=user";} ?> " class="navigation_2_link-nav"><span class="navigation_2-icon icofont-ui-settings">&nbsp</span>Setting</a></li>

            </ul>
        </nav>
</div>

</div>

<section class="section-cata">
    <div class="section-cata-div">
        <h2 class="section-user-ex">
                Profile
        </h2>
    </div>
    
    <div class="form_container">
        <form action="../php/change_password.php" class="user_d_from" method="post">
            <div class="user_table">
                <table class="user_table_s" border=2px >
                    <tr>
                        <td class="user_table_s-col-label">Username</td>
                        <td class="user_table_s-col-input" ><?php echo $_SESSION['uname'];   ?></td>
                    </tr>
                    <tr>
                        <td class="user_table_s-col-label">
                            <label for="password" >Existing Password</label> 
                        </td>
                        <td class="user_table_s-col-input">
                            <input type="password" name="password_old" class="user_table_s-col-input-box form_input" id="password" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="user_table_s-col-label">
                            New Password
                        </td>
                        <td class="user_table_s-col-input">
                            <input type="password" name="change_p" id="change_p" class="user_table_s-col-input-box form_input" required >
                            <input type="submit" name="submit-change_pword" class="form-btn-submit btn btn-ch-p" value="Update">
                        </td>
                    </tr>
                    <tr>
                        <td class="user_table_s-col-label">
                            First Name
                        </td>
                        <td class="user_table_s-col-input">
                            <?php echo $_SESSION['f_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="user_table_s-col-label">
                            Last Name
                        </td>
                        <td class="user_table_s-col-input">
                            <?php echo $_SESSION['l_name']; ?>
                        </td>
                    </tr>

                </table>
            </div>
            
        </form>
    </div>
</section>