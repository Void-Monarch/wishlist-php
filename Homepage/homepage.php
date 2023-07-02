<?php 
include "../php/connect.php";
include "../php/login_db.php";
ini_set('display_errors', '0');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WishList | Be one with the web</title>
    <!-- link style sheets  -->
    <link rel="stylesheet" href="../css/home-css.css">
    <link rel="stylesheet" href="../Assests/icons/linea_complete_1/_basic/_ICONFONT/styles.css">
    <link rel="stylesheet" href="../Assests/icons/icofont/icofont.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato">
    <link rel="stylesheet" href="https://www.behance.net/gallery/57107775/CRAFTER-FREE-VINTAGE-FONT/modules/337672261">
    
</head>
<body>

    <div class="navigation">
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


    <div class="header">
        <header class="header-in">
            <h1 class="head-h1">
                <span class="header-main">
                    WishList
                </span> 
                <span class="header-sub">
                    Binge that WishList
                </span>
            </h1>
            
                <a href="#get-started" class="btn btn-white btn-head-ani">get started</a>
            
        </header>
    </div>
    <main>
        <section class="section-what">
            <h2 class="section-what-head">
                What is available
            </h2>
            
            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="head-tri">
                       WishList your favorite shows
                    </h3>
                    <p class="paragraph">
                        WishList your favoorite shows from our wide range.
                        Shows from multiple genra are available.
                    </p>

                    <h3 class="head-tri">
                        Enjoy the joy of Binge
                    </h3>
                    <p class="paragraph">
                        
                    </p>
                     
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="../Assests/gear5-1080.jpg" alt="anime" class="composition_photo composition_photo--p1">
                        <img src="../Assests/books.png" alt="books" class="composition_photo composition_photo--p2">
                        <img src="../Assests/squid-game.jpg" alt="webseries" class="composition_photo composition_photo--p3">
                    </div>
                </div>
            </div>
        </section>
        <a id="get-started"></a>

        <section class="section-features">
            <div class="row">
                <div class="col-1-of-4 ">
        <a href="<?php if(!isset($_SESSION['uname'])){ echo "../login/Login_frontend.php#login-here"; } else{echo "../wishlist/user-wishlist.php";} ?>"><div class="feature-box">
                         <i class="icon-basic-todolist-pen feature-box-icon"> </i>
                         <h3 class="head-tri">Add to wishlist</h3>
                         <p class="feature-box_text">
                             Add shows to your wishlist. 
                         </p>
                    </div></a>
                </div>
                <div class="col-1-of-4 ">
        <a href="../Homepage/home-explore.php"><div class="feature-box">
                        <i class="icon-basic-compass feature-box-icon"> </i>
                        <h3 class="head-tri">Explore</h3>
                        <p class="feature-box_text">
                            Explore all shows. Available
                        </p>
                   </div></a>
                </div>
                <div class="col-1-of-4 ">
        <a href="#"><div class="feature-box">
                        <i class="icon-basic-question feature-box-icon"> </i>
                        <h3 class="head-tri">Random Recomendation</h3>
                        <p class="feature-box_text">
                            Random Shows.
                        </p>
                   </div></a>
                </div>
                <div class="col-1-of-4 ">
        <a href="<?php if(!isset($_SESSION['uname'])){ echo "../login/Login_frontend.php#login-here"; } else{echo "../Homepage/user-account.php";} ?>"><div class="feature-box">
                        <i class="icon-basic-postcard feature-box-icon"> </i>
                        <h3 class="head-tri">Account</h3>
                        <p class="feature-box_text">
                            Manage you account details. 
                        </p>
                   </div></a>
                </div>
            </div>
        </section>        
    </main> 

    <footer class="footer">
        <div class="footer_logo-box">
            <img src="../Assests/icons/Wish list-logos/Wish list-logos_transparent.png" alt="logo" class="footer_logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer_navigation">
                    <ul class="footer_list">
                        <li class="footer_item"><a href="#" class="footer_link">Company</a></li>
                        <li class="footer_item"><a href="#" class="footer_link">Contact Us</a></li>
                        <li class="footer_item"><a href="#" class="footer_link">Privacy Policy</a></li>
                        <li class="footer_item"><a href="#" class="footer_link">Terms</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-1-of-2">
                <p class="footer_copyright">
                    Built By <a href="#" class=footer_link>Harsh Parashar</a>, <a href="#" class="footer_link">Tirth Patel</a> <a class="footer_link"> Manish Singh</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
