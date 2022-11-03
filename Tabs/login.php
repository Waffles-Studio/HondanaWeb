<?php
    if (!isset($_SESSION)) {
        session_start();
    } 
    $_SESSION['login'] = false; 
    $_SESSION['Nombre'] = null;
?>

<!DOCTYPE html>
<html lang="es">
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
        
    </head>

    <style>
        .padre
        {
            background-color: white;
            color: black;
            height: 500px; /*altura*/
            width: 700px;
            
            border-radius: 20px;

            display: flex;
            justify-content: center;
            align-items: center;

        }
        .hijo
        {
            background-color: transparent;
            padding: 2px;
            width: 349px;
            font-family: 'Segoe UI';

        }
        #corr
        {
            padding-left: 15px;
            border-radius: 7px;
            width: 290px;
            height: 30px;

            border-color:gray;
            border-style:solid;
            border-width: 1px;
            margin: 3px;

            margin-bottom: 7px;
            font-size: 15px;
        }
        #corr2
        {
            padding-left: 15px;
            border-radius: 10px;
            width: 140px;
            height: 30px;

            border-color:gray;
            border-style:solid;
            border-width: 1px;
            margin: 3px;

            margin-bottom: 7px;
            font-size: 15px;
        }
        .linea
        {
            background-color: black;
            height: 450px;
            width: 1px;
        }
        .modal{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            transition: all 500ms ease;
            opacity: 0;
            visibility: hidden;
        }
        .modal header{
            font-size: 20px;
            font-weight: bold;
        }
        .modal input{
            border: 3px solid ;
            border-color: orangered;
            border-radius: 10px;
            height: 38px;
            width: 350px;
            padding-left: 15px;
        }

        #btn-modal:checked ~ .modal{
            opacity: 1;
            visibility: visible;
        }
        .contenedor{
            border-radius: 7px;
            width: 400px;
            height: 480px;
            margin: auto;
            background-color: #fff;
            box-shadow: 1px 7px 25px rgba(0, 0, 0, 0.6);
            transition: all 500ms ease;
            position: relative;
        }
        .lbl-modal{
            cursor: pointer;    
            color: orangered;
            text-shadow: none;
            font-size: 15px;
            text-decoration: underline;
            font-weight: bold;
        }
        #btn-modal{
            display: none;         
            
        }
    </style>


    <body>
        <div id="page">
            <!-- Page Loader -->
			<div id="pageloader">
				<div class="loader-item fa fa-spin text-color"></div>
			</div>

        </div>
        <!-- Header -->
        
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
                                            <a href="library.php">Library</a> 
                                        </li>
                                        <li>
                                            <a href="gallery.php">Gallery</a> 
                                        </li>
                                        <li>
                                            <a href="download.php">Download</a> 
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
        
        <br>
        <!--Cuadro-->
        <div id="main-slider" style="display: flex; justify-content: center;">
            <div id="carousel-example-generic1" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../Resources/fondosinq.png" alt="" title="" width="2000" height="1080">
                        <div class="carousel-caption" style="display: flex; justify-content: center; align-items: center; "><br><br>
                            <!--Login / Registro-->
                            <div class="padre animation animated-item-2" style="box-shadow: 8px 20px 20px black;">

                                <!--Login-->
                                <form action="../bd/sesion.php" class="login-form col-7" method="post">
                                    <div class="hijo">
                                        <h3 style="font-family: 'Segoe UI';">Let's log in!</h3>
                                        <br><br>
                                        <label> Welcome Back!</label>
                                        <br><br>
                                        <input type="text" id="corr" name="corr" placeholder="Email" >
                                        <br>
                                        <input type="password" id="corr" name="pass" placeholder="Password" >
                                        <br><br><br><br>
                                        <button type="submit" class="btn btn-default animation animated-item-2" onclick="setState()" style="color: white;">
                                            <b>Log In</b>
                                            &nbsp;
                                        </button>
                                        <br><br>
                                        <label for="btn-modal" class="lbl-modal" style="font-size: 14px; text-shadow: none; color: #FF500A;" ><b><u>Did you forget your Password?</u></b></label>
                                    </div>                                                    
                                </form>

                                <div class="linea">
                                    <p></p>
                                </div>


                                <!--Registro-->
                                <form action="../bd/register.php" method="post" class="login-form col-7 d-flex flex-wrap">

                                    <div class="hijo">
                                        <h3 style="font-family: 'Segoe UI';"><br>Create an Account</h3>
                                        <br>
                                        <input type="text" id="corr" name="name" placeholder="Username" >
                                        <br>
                                        <input type="text" id="corr" name="corre" placeholder="E-mail" >
                                        <br>
                                        <input type="password" id="corr" name="pass1" placeholder="Password" >
                                        <br>
                                        <input type="password" id="corr" name="pass2" placeholder="Confirm Password" >
                                        <br>
                                        <br><br><br>
                                        <button type="submit" class="btn btn-default animation animated-item-2" style="color: white;" name="registrar">
                                            <b>Sign Up</b>
                                            &nbsp;
                                        </button>
                                        <br><br>
                                        <label style="text-shadow: none; font-size: 14px;" >By continuing, you agree to Hondana's Terms of Service.</label>
                                    </div> 
                                </form>   
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Reuperar contraseña -->
        <form action="../mail/recuperar_contrasena.php" method="POST">
            <input type="checkbox" id="btn-modal" >
            <div class="modal">
                <div class="contenedor">
                    <header>Forgot your password?</header>                
                    <div class="contenido">   
                        <img src="../Resources/log.png" height="200px" width="200px"><br>
                        <body>
                        Please enter your registered email address to send password recovery information.
                        </body>                    
                        <br><br>
                        <span style="text-align: left; align-items: left;">Enter your email address:</span>    
                        <br>
                        <input type="text" name="email_reg" placeholder="example@gmail.com">
                        <br><br>
                        <button type="submit" name="Enviar" value="Enviar" class="btn btn-default animation animated-item-2" style="color:white ;">Request Password Recovery</button>
                    </div>
                    <label for="btn-modal" class="lbl-modal" >Return to login</label>
                </div>
            </div>
        </form>

        <br><br>
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
