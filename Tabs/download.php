<?php
    if (!isset($_SESSION)) {
        session_start();
    }   
?>

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
        <link rel="shortcut icon" href="../Resources/icono.ico" />
        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
        <!-- Font Awesome Icons -->
        <link href='../css/font-awesome.min.css' rel='stylesheet' type='text/css' />
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/hover-dropdown-menu.css" rel="stylesheet" />
        <!-- Icomoon Icons -->
        <link href="../css/icons.css" rel="stylesheet" />
        <!-- Revolution Slider -->
        <link href="../css/revolution-slider.css" rel="stylesheet" />
        <link href="../rs-plugin/css/settings.css" rel="stylesheet" />
        <!-- Animations -->
        <link href="../css/animate.min.css" rel="stylesheet" />
        <!-- Owl Carousel Slider -->
        <link href="../css/owl/owl.carousel.css" rel="stylesheet" />
        <link href="../css/owl/owl.theme.css" rel="stylesheet" />
        <link href="../css/owl/owl.transitions.css" rel="stylesheet" />
        <!-- PrettyPhoto Popup -->
        <link href="../css/prettyPhoto.css" rel="stylesheet" />
        <!-- Custom Style -->
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../css/responsive.css" rel="stylesheet" />
        <!-- Color Scheme -->
        <link href="../css/color.css" rel="stylesheet" />
        <link href="../css/alertify/alertify.css" rel="stylesheet" type="text/css">
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
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
                                 
                                <a class="navbar-brand" href="../index.php">
                                    <img class="site_logo" alt="Hondana Logo" src="../Resources/LogoV1.png" />
                                </a></div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- nav -->
                                    <ul class="nav navbar-nav">
                                        <!-- Home  Mega Menu -->
                                        <li >
                                            <a href="../index.php">Home</a> 
                                        </li>
                                        <li>
                                            <a href="library.php" >Library</a> 
                                        </li>
                                        <li>
                                            <a href="gallery.php" >Gallery</a> 
                                        </li>
                                        <li>
                                            <a href="download.php" style="color: #FF500A;"><b>Download</b></a> 
                                        </li>
                                        <li>
                                            <a href="feedback.php">Feedback</a> 
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
                                                    echo("<a href='login.php' ><b>Log Out<b></a>");
                                                }else{
                                                    echo ("<a href='login.php' >Register / Log In</a>");
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

        <div>
            <div style="text-align: center; font-size: 50px; ">
                <img src="../Resources/log.png" height="800px">
                <p>You are just one step away to start reading and enjoying your favorite books.</p>
            </div>
            <div style="display: flex; justify-content: center; align-items: center;">
                <?php
                    if($_SESSION['login'] === true){
                        echo("<a class='btn btn-default' href='../Programa/hondana.rar' download='HondanaProject.rar' style='color: white; background-color: #FF7F27;'> Download Latest Version (53 MB)</a>");
                    }else{
                        ?> <button class="btn btn-default' href='login.php' style='color: white; background-color: #FF7F27;" onclick="mens('123');"> Please Register / Login to Download </button>
                        <?php
                    }
                ?>
            </div><br>
            <div style="display: flex; justify-content: center; align-items: center;">
                <p style="color: gray;">For Windows 11/10/8/8.1/7 64-bit</p>
            </div>
            <div style="text-align:center;">
                <p style="color: gray;">By downloading Hondana Project, you agree to Hondana's Terms of Service<br> and Waffles Studio's Additional Terms of Servie</p>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br>

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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/hover-dropdown-menu.js"></script>
        <script type="text/javascript" src="../js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../js/jquery.sticky.js"></script>
        <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>	
        <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
        <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="../js/revolution-custom.js"></script>
        <script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="../js/jquery.appear.js"></script>
        <script type="text/javascript" src="../js/effect.js"></script>
        <script type="text/javascript"  src="../js/owl.carousel.min.js"></script>
        <script type="text/javascript"  src="../js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript"  src="../js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript"  src="../js/jquery.countTo.js"></script>
        <script type="text/javascript" src="../js/tweet/carousel.js"></script>
        <script type="text/javascript" src="../js/tweet/scripts.js"></script>
        <script type="text/javascript" src="../js/tweet/tweetie.min.js"></script>
        <script type="text/javascript" src="../js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="../js/custom.js"></script>
        <script type="text/javascript" src="../css/alertify/alertify.js"></script>
        <script type="text/javascript">
            function mens(texto) { 
                alert('To download the program you need an account');
            }
        </script>

        
</html>



