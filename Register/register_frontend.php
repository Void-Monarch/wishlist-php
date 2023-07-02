<?php
    include '../php/connect.php';
    include '../php/register_db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register | Wishlist</title>
    <link rel="stylesheet" href="../css/home-css.css">
    <link rel="stylesheet" href="../Assests/icons/linea_complete_1/_basic/_ICONFONT/styles.css">
    <link rel="stylesheet" href="../Assests/icons/icofont/icofont.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato">
</head>

<body id='res-body'>

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
                    <li class="navigation_item"><a href="../wishlist/user-wishlist.php" class="navigation_link-nav"><span class="navigation-icon icofont-library">&nbsp;</span>Wishlist</a></li>
                </ul>
            </nav>
    </div>
    
<main>


<section class="section-register" id="register-here">
    
    <div class="row" >
        <div class="register">
        <div class="register_form" >
            <form action="../php/register_db.php" class="form" method="post">

            <div class="register-head">
            <h3 class="head-tri-res">
                       register with Us
            </h3>
            </div>
<div class="sub">
<input type="checkbox" name="next-toggle" class="navigation_checkbox sub_checkbox" id="next-toggle">

                <div class="form_group-res form-register sub-next-pre">
                    <input type="text" name="username" class="form_input" id=username placeholder="Username" required>
                    <label for="username" class="form_label">Username</label>
                </div>
                
                <div class="form_group-res form-register sub-next-pre">
                    <input type="password" name="password" class="form_input" id=password placeholder="Password" required>
                    <label for="password" class="form_label">Password</label>
                </div>

                <div class="form_group-res form-register sub-next-pre">
                    <input type="email" name="email" class="form_input" id=email placeholder="Email" required>
                    <label for="password" class="form_label">Email</label>
                </div>

                <div class="form_group-res form-register sub-next-field sub-next-field-1">
                    <input type="text" name="f_name" class="form_input " id=firstname placeholder="First Name" required>
                    <label for="firstname" class="form_label">First Name</label>
                </div>

                <div class="form_group-res form-register sub-next-field sub-next-field-2">
                    <input type="text" name="l_name" class="form_input " id="lastname" placeholder="Last Name" required>
                    <label for="lastname" class="form_label">Last Name</label>
                </div>

                
            
            
            
            
            
            <label for="next-toggle" class="res-next_button-1 sub-next-text-1">
                <span class="form-btn form-res-sub form-btn-submit form-btn-submit-res next-green">
                Next &#8594
                </span>
            </label>

            <label for="next-toggle" class="res-next_button-1 sub-next-text-2">
                <span class="form-btn form-res-sub form-btn-submit form-btn-submit-res next-green">
                &#8592 Back
                </span>
            </label>

               
                <div class="form-btn form-res-sub sub-next-res-btn">
                    <input class="form-btn-submit btn form-btn-submit-res  " type="submit" value="register &#8594 &nbsp" name="submit" placeholder="register" >
                    
                </div>
</div>
            </form>
        </div>
        </div>
    </div>
</section>
</main>

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

    
</body>
</html>