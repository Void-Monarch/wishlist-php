<?php 
include "../php/connect.php";
include "../php/login_db.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();   
}
if(isset($_REQUEST['search'])){
$search=$_REQUEST['search'];
$_SESSION['search']=$search;
$auth=$_SESSION['auth'];

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

<!-- search bar -->

<form action="../Homepage/home-explore.php#all-here" method="get">
    <div class="form_search_container">
    <input type="search" name="search" id="search" class="form_search" placeholder="Search">
    <div class="form_search_label_div">&nbsp;
    <a href="" class="_form_search_label"><i class="form_search_logo icofont-search-2"></i> </a>
    </div>
    </div>
</form>

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
                <li class="navigation_2_item"><a href="<?php if(!isset($_SESSION['auth'])){ echo "#"; } if($_SESSION['auth']>=1){echo "../admin/admin_manage.php?info=user";} ?> " class="navigation_2_link-nav"><span class=<?php if(isset($_SESSION['auth'])){echo '"navigation_2-icon icofont-ui-settings"';}?>>&nbsp</span><?php if(isset($_SESSION['auth'])){echo "Setting";}?></a></li>

            </ul>
        </nav>
</div>

</div>

<section class="section-cata">
    <div class="section-cata-div">
        <h2 class="section-what-head-ex">
                Categories
        </h2>
    </div>
    
    <div class="row">
                <div class="col-1-of-3 ">
                    <div class="card">

                    <div class="card_side card_side--front">
                    <div class="card_pic card_pic--1">&nbsp</div>        
                    <h4 class="card_heading">
                        <span class="card_heading-span card_heading-span--1">
                                Web Series
                        </span>        
                    </h4>
                    <div class="card_heading-sec">
                    A web series is a series of scripted or non-scripted online videos, generally in episodic form, released on the Internet.
                    In general, web series can be watched on a range of platforms and devices, including desktop, laptop, tablets and smartphones. 
                    They are different from streaming television, which can be watched on various streaming platforms.
                    </div>
                    </div>

                    <div class="card_side card_side--back card_side--back-1">
                            <a href="?cate=web" class="btn font-cate">Web Series</a>
                    </div>

                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                
                <div class="card_side card_side--front">
                <div class="card_pic card_pic--2">&nbsp</div>
                <h4 class="card_heading">
                        <span class="card_heading-span card_heading-span--2">
                                Anime
                        </span>        
                    </h4>
                    <div class="card_heading-sec">
                    Anime is hand-drawn and computer-generated animation originating from Japan. Outside of Japan and in English, anime refers to Japanese animation, and refers specifically to animation produced in Japan.
                    </div>
                    </div>
                    <div class="card_side card_side--back card_side--back-2">
                    <a href="?cate=anime" class="btn font-cate">Anime</a>
                    </div>
                    </div>
                </div>

            <div class="col-1-of-3 ">
                    <div class="card">
                    <div class="card_side card_side--front">
                    <div class="card_pic card_pic--3">&nbsp</div>
                    <h4 class="card_heading">
                        <span class="card_heading-span card_heading-span--3">
                                Novel
                        </span>        
                    </h4>
                    <div class="card_heading-sec">
                    </div>
                    </div>
                    <div class="card_side card_side--back card_side--back-3">
                    <a href="?cate=novel" class="btn font-cate">Novel</a>
                    </div>

                    </div>
                </div>
            </div>    

</section>



<section class="tile" id=all-here>

        <div class="section-cata-div">
                <h2 class="section-all-shows">
                    <?php if(isset($_REQUEST['search'])){ echo "Filter ('$search')"; }else{ echo "<a href='?cate=%' >All Shows</a>"; } ?>
                </h2>
        </div>
    
    <div class="row">
        <?php include "../php/tile.php"; ?>
    </div>

</section>


<?php include '../php/popup.php'; ?>
</body>
</html>