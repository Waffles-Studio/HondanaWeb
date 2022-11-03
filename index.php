<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HondanaProject</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Mist — Multi-Purpose HTML Template" />
        <meta name="author" content="zozothemes.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="Resources/icono.ico" />
        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
        <!-- Font Awesome Icons -->
        <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/hover-dropdown-menu.css" rel="stylesheet" />
        <!-- Icomoon Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Revolution Slider -->
        <link href="css/revolution-slider.css" rel="stylesheet" />
        <link href="rs-plugin/css/settings.css" rel="stylesheet" />
        <!-- Animations -->
        <link href="css/animate.min.css" rel="stylesheet" />
        <!-- Owl Carousel Slider -->
        <link href="css/owl/owl.carousel.css" rel="stylesheet" />
        <link href="css/owl/owl.theme.css" rel="stylesheet" />
        <link href="css/owl/owl.transitions.css" rel="stylesheet" />
        <!-- PrettyPhoto Popup -->
        <link href="css/prettyPhoto.css" rel="stylesheet" />
        <!-- Custom Style -->
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <!-- Color Scheme -->
        <link href="css/color.css" rel="stylesheet" />
        <link href="css/alertify/alertify.css" rel="stylesheet" type="text/css">

        <!-- inicio del codigo -->
        <script>
        "use strict";

        !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
            t.factory = function(e) {
            return function() {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
            };
            }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
            }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
            };
        }
        }();
        drift.SNIPPET_VERSION = '0.3.0';
        drift.load('gnny34hbcn4z');
        </script>
        <!-- fin del codigo -->
        
    </head>

    <body>

    <div id="page">

        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>
        <!-- Top Bar -->
        <div id="top-bar" class="top-bar-section top-bar-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Top Contact -->
                        <div class="top-contact link-hover-black">
                        <a href="#">
                        <i class="fa fa-phone"></i>+52 871 511 0608</a> 
                        <a href="#">
                        <i class="fa fa-envelope"></i>HondanaProject@gmail.com</a></div>
                        <!-- Top Social Icon -->
                        <div class="top-social-icon icons-hover-black">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-youtube"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-github"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Navbar -->
        <header id="sticker" class="sticky-navigation">
            <!-- Sticky Menu -->
            <div class="sticky-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span></button> 
                                <!-- Logo -->
                                 
                                <a class="navbar-brand" href="index.php">
                                    <img class="site_logo" alt="Hondana Logo" src="Resources/LogoV1.png" />
                                </a></div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- nav -->
                                    <ul class="nav navbar-nav">
                                        <!-- Home  Mega Menu -->
                                        <li >
                                            <a href="index.php" style="color: #FF500A;"><b>Home</b></a> 
                                        </li>
                                        <li>
                                            <a href="Tabs/library.php">Library</a> 
                                        </li>
                                        <li>
                                            <a href="Tabs/gallery.php">Gallery</a> 
                                        </li>
                                        <li>
                                            <a href="Tabs/download.php">Download</a> 
                                        </li>
                                        <li>
                                            <a href="Tabs/feedback.php">Feedback</a> 
                                        </li>
                                        <li style="width: 400px;">
                                            <a ></a>
                                        </li>
                                        <li>
                                            <?php
                                                if (!isset($_SESSION['Nombre'])) {
                                                    
                                                }else{
                                                    echo($_SESSION['Nombre']);
                                                }
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                                if(!isset($_SESSION['login'])){
                                                    $_SESSION['login'] = false;
                                                }
                                                if($_SESSION['login'] === true){
                                                    echo("<a href='Tabs/login.php' ><b>Log Out<b></a>");
                                                }else{
                                                    echo ("<a href='Tabs/login.php' >Register / Log In</a>");
                                                }
                                             ?>                                            
                                        </li>
                                    </ul>

                                    
                                    <!-- Ventana 1 -->
                                    <div class="bg-white hide-show-content no-display header-contact-content">
                                        <p class="vertically-absolute-middle">Call Us 
                                        <strong>+0 (123) 456 78 90</strong></p>
                                        <button class="close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>

                                    <!-- Ventana 2 -->
                                    <div class="bg-white hide-show-content no-display header-search-content">
                                        <form role="search" class="navbar-form vertically-absolute-middle">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your text &amp; Search Here"
                                                class="form-control" id="s" name="s" value="" />
                                            </div>
                                        </form>
                                        <button class="close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- Header Search Content -->
                                    <!-- Header Share Content -->
                                    <div class="bg-white hide-show-content no-display header-share-content">
                                        <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a> 
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a> 
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a> 
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                        </a> 
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a></div>
                                        <button class="close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- Header Share Content -->
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- navbar -->
            </div>
            <!-- Sticky Menu -->
        </header>

        <!-- slider -->
        <section class="slider" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- Slide 2 --><!-- data-x="12" data-y="200"-->
                    <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
                        <div class="elements">
                            <h2 class="tp-caption lft skewtotop" data-x="12" data-y="50" 
                            data-speed="1000" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500"
                            data-endeasing="Power1.easeIn" style="width: 620px; height: 550px; ">
                            <br><br>
                                <span class="text-shadow" style="color: #FF500A; font-family: Segoe UI;">Welcome to the<br>Hondana Project</span> 
                                <br>
                                <span style="color: black; font-family: Segoe UI;">A fast, light, and easy-to-use reading platform</span>
                                <br><br>
                                <a href='Tabs/library.php' class='btn btn-default animation animated-item-2' style="width: 150px; margin-right: 15px; background-color: #FF500A; color: white;">Explore</a>
                                <a href='Tabs/download.php' class='btn btn-default animation animated-item-2' style="width: 150px; background-color: #FF500A; color: white;">Download</a>
                                </br>
                            </h2>
                        </div>
                        <img src="Resources/BackV2.png" alt="" data-bgfit="cover" data-bgposition="center top"
                        data-bgrepeat="no-repeat" />
                    </li>

                    <!-- Slide 2 -->
                    <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
                        <div class="elements">
                            <h2 class="tp-caption lft skewtotop" data-x="12" data-y="105"
                            data-speed="1000" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500"
                            data-endeasing="Power1.easeIn" style="width: 620px; height: 550px; ">
                                <span style="color: gray; font-family: Segoe UI;">Hondana offers you a wide collection of free access books, with the integration of bookmarks, chat groups, an more!</span>
                                <br><br>
                                <a href='Tabs/library.php' class='btn btn-default animation animated-item-2' style="width: 150px; margin-right: 15px; background-color: #FF500A; color: white;">Explore</a>
                                <a href='Tabs/download.php' class='btn btn-default animation animated-item-2' style="width: 150px; background-color: #FF500A; color: white;">Download</a>
                                </br>
                            </h2>
                        </div>
                        <img src="Resources/BackV3.png" alt="" data-bgfit="cover" data-bgposition="center top"
                        data-bgrepeat="no-repeat" />
                    </li>
                
                    <!--
                    <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
                        <div class="elements">
                            <h2 class="tp-caption lft skewtotop title bold" data-x="12" data-y="181" data-speed="1000"
                            data-start="1700" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                <strong>
                                    <span>Architecture and</span>
                                </strong>
                            </h2>
                            <h3 class="tp-caption lft skewtotop title bold" data-x="12" data-y="271" data-speed="1000"
                            data-start="1900" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                <strong>
                                    <span class="text-color text-shadow">interior design firm</span>
                                </strong>
                            </h3>
                        </div>
                        <img src="img/sections/slider/slider22-bg.jpg" alt="" data-bgfit="cover" data-bgposition="center top"
                        data-bgrepeat="no-repeat" />
                    </li>
                     Slide Ends -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </section>
    
        <!-- works -->
        <section id="testimonials" class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 testimonails" data-animation="fadeInUp">
                        <div class="owl-carousel pagination-1 dark-switch" data-pagination="true" data-autoplay="true"
                        data-navigation="false" data-items="3">
                            <div class="item pad-10">
                                <div class="desc-border bottom-arrow">
                                    <blockquote class="small-text text-center">
                                    If you are looking for a fast and light app to read your favorite books and chat with people with the same books tastes, this is your ideal app, create a free account and join our community.
                                    </blockquote>
                                    <div class="star-rating text-center">
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o text-color"></i></div>
                                </div>
                                <div class="client-details text-center">
                                    <div class="client-image">
                                        <img class="img-circle" src="Resources/Desktop/darienmolina.png" width="80" height="80"
                                        alt="" />
                                    </div>
                                    <div class="client-details">
                                    <strong class="text-color">Darien Molina</strong> 
                                    <span>Design, FrontEnd</span></div>
                                </div>
                            </div>

                            <div class="item pad-10">
                                <div class="desc-border bottom-arrow">
                                    <blockquote class="small-text text-center">
                                    Hondana is everything, you want books? you got it. This page/application is a very convenient place to get the books you want, not only for its ease of use, it's just... beautiful!
                                    </blockquote>
                                    <div class="star-rating text-center">
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o text-color"></i></div>
                                </div>
                                <div class="client-details text-center">
                                    <div class="client-image">
                                        <img class="img-circle" src="Resources/Desktop/brianbatres.png" width="80" height="80"
                                        alt="" />
                                    </div>
                                    <div class="client-details">
                                    <strong class="text-color">Brian Batres</strong> 
                                    <span>FrontEnd, BackEnd</span></div>
                                </div>
                            </div>

                            <div class="item pad-10">
                                <div class="desc-border bottom-arrow">
                                    <blockquote class="small-text text-center">
                                    Hondana Web is the site that allows you to search for your favorite books from any device with internet access, even from your cell phone!  The power of books, In the palm of your hands!  
                                    </blockquote>
                                    <div class="star-rating text-center">
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o  text-color"></i> 
                                    <i class="fa fa-star-half-o text-color"></i></div>
                                </div>
                                <div class="client-details text-center">
                                    <div class="client-image">
                                        <img class="img-circle" src="Resources/Desktop/christian.png" width="80" height="80"
                                        alt="" />
                                    </div>
                                    <div class="client-details">
                                    <strong class="text-color">Christian Medina</strong> 
                                    <span>BackEnd, FrontEnd</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer id="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyrights -->
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2022 <a href="https://github.com/Waffles-Studio">Waffles Studio.</a> 
                        <br />
                        <!-- Terms Link -->
                         
                        <a href="#">Conditions </a> |
                        <a href="#">Privacy </a> |
                        <a href="#">Accessibility </a> |
                        <a href="#">Support</a></div>
                        <div class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <!-- Goto Top -->
                            <a href="#page">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>



    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/hover-dropdown-menu.js"></script>
        <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>	
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/revolution-custom.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/effect.js"></script>
        <script type="text/javascript"  src="js/owl.carousel.min.js"></script>
        <script type="text/javascript"  src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript"  src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript"  src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/tweet/carousel.js"></script>
        <script type="text/javascript" src="js/tweet/scripts.js"></script>
        <script type="text/javascript" src="js/tweet/tweetie.min.js"></script>
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="css/alertify/alertify.js"></script>
</body>
</html>

<?php
    if(isset($_SESSION['mensaje']))
    { ?>
        <script type="text/javascript">
            alertify.set('notifier','position', 'bottom-right');
            <?=$_SESSION['mensaje'];
                $_SESSION["mensaje"]=null;
            ?>;
        </script>
<?php } ?>
