<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>personal blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="common-css/bootstrap.css" rel="stylesheet">

    <link href="common-css/ionicons.css" rel="stylesheet">


    <link href="layout-1/css/styles.css" rel="stylesheet">

    <link href="layout-1/css/responsive.css" rel="stylesheet">

    <link href="single-post-2/css/styles.css" rel="stylesheet">

    <link href="single-post-2/css/responsive.css" rel="stylesheet">

</head>
<body >

    <header>
        <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo"><img src="images/logo.png" alt="Logo Image"></a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="http://localhost/new/web/index.php">Home</a></li>
                <li><a href="http://localhost/new/web/index.php?r=site%2Fcategories">Categories</a></li>
            </ul><!-- main-menu -->

           

        </div><!-- conatiner -->
    </header>

 

   

               

              <?= $content ?>   

                


       <!-- section -->


    <footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <a class="logo" href="#"><img src="images/logo.png" alt="Logo Image"></a>
                        <p class="copyright">Bona @ 2017. All rights reserved.</p>
                        <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <ul class="icons">
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                        <div class="footer-section">
                        <h4 class="title"><b></b></h4>
                        <ul>



                            <li><a href="#">BEAUTY</a></li>
                            <li><a href="#">HEALTH</a></li>
                            <li><a href="#">MUSIC</a></li>
                        
                        </ul>
                        <ul>
                            <li><a href="#">SPORT</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">TRAVEL</a></li>
                        </ul>
                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <h4 class="title"><b>SUBSCRIBE</b></h4>
                        <div class="input-area">
                            <form>
                                <input class="email-input" type="text" placeholder="Enter your email">
                                <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                            </form>
                        </div>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

            </div><!-- row -->
        </div><!-- container -->
    </footer>


    <!-- SCIPTS -->

    <script src="common-js/jquery-3.1.1.min.js"></script>

    <script src="common-js/tether.min.js"></script>

    <script src="common-js/bootstrap.js"></script>

    <script src="common-js/scripts.js"></script>

</body>
</html>
