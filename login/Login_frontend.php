<?php 
include "../php/connect.php";
include '../php/login_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Wishlist</title>
    <link rel="stylesheet" href="../css/home-css.css">
    <link rel="stylesheet" href="../Assests/icons/linea_complete_1/_basic/_ICONFONT/styles.css">
    <link rel="stylesheet" href="../Assests/icons/icofont/icofont.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato">
</head>
<body id='log-body'>
<main>
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
                <li class="navigation_item"><a href="<?php if(!isset($_SESSION['uname'])){ echo "../admin/admin_login.php"; } else{echo "../php/logout.php";} ?>" class="navigation_link-nav"><span class="navigation-icon <?php if(!isset($_SESSION['uname'])){ echo "icofont-login"; } else{echo "icofont-logout";}?>">&nbsp</span><?php if(!isset($_SESSION['uname'])){ echo "Admin Login"; } else{echo "Log out";} ?></a></li>
                <li class="navigation_item"><a href="../Homepage/home-explore.php" class="navigation_link-nav"><span class="navigation-icon icofont-memorial">&nbsp;</span>All shows</a></li>
                <li class="navigation_item"><a href="../wishlist/user-wishlist.php" class="navigation_link-nav"><span class="navigation-icon icofont-library">&nbsp;</span>Wishlist</a></li>

            </ul>
        </nav>
    </div>
    
<section class="section-login" id="login-here">
    
    <div class="row" >
        <div class="login">
        <div class="login_form" >
            <form action="../php/login_db.php" class="form" method="get">
                
            <div class="login-head">
            <h3 class="head-tri-log">
                       Login into Your Account
            </h3>
            </div>
                
                <div class="form_group">
                    <input type="text" name="username" class="form_input" id=username placeholder="Username" required>
                    <label for="username" class="form_label">Username</label>
                </div>
                
                <div class="form_group">
                    <input type="password" name="password" class="form_input" id=password placeholder="Password" required>
                    <label for="password" class="form_label">Password</label>
                </div>

                <div class="form-btn">
                    <input class="form-btn-submit btn" type="submit" value="Log In &#8594" name="submit" placeholder="Log In" >
                    <a href="../register/register_frontend.php#register-here"><input class="form-btn-submit form-btn-submit-res  btn" type="button" value="register &#8594" name="" placeholder="register" ></a>
                </div>

            </form>
        </div>
        </div>
    </div>
</section>


<footer class="footer">
        <div class="footer_logo-box"> 
            <img src="../Assests/icons/Wish list-logos/Wish list-logos_transparent.png" alt="logo" class="footer-logo">
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
</main>
    
</body>
</html>