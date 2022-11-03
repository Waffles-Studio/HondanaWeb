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
                                            <a href="library.php" style="color: #FF500A;"><b>Library</b></a> 
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
            
        <section id="team" class="page-section">
            <div class="container">

                <!-- PARTE DE CHRIS -->
                <div class="container">
                        <!-- LIRBOS DESTACADOS -->
                        <div class="row ">
                            <div  style="text-align: center;">

                                <div style="text-align: center; border-radius:15px; border-width: 4px; border-color: #FF7F27; border-style: solid;">
                            
                                    <div style="text-align: left">
                                        <div  style = "color:#FF7F27; transform: scale(2); display: inline-block; padding-left: 15px; padding-right: 15px; padding-bottom: 15px; " class = "fa fa-star  "> </div> 
                                        <h3 style="display: inline-block; color:#FF7F27;" > Weekly highlights </h3><br>
                                    </div>
                                    
                                    <div class="grandspace">
                                        <div class="spaceson"> 

                                            <div id="cuerpo2">
                                                
                                            </div>                                              
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                            
                    <br>
                    <div style="display: inline-block; width:200px;  text-align: left"id="menosmargen">
                        <h4 style = "color:#FF7F27;  padding-left: 30px; "  > All books</h4>
                    </div>

                    <div style="float: right; padding-right: 30px; " id="menosmargen">
                        <a   >Didn't find the book you were looking for? </a> <a style = "color:#FF7F27; " href="#"  data-toggle="modal" data-target="#nuevo" > <u><b>  Click Here<b></u></a>
                    </div>

                </div>
                
                <br>
                <!-- TEXTO BOX -->
                <div style="display: flex; justify-content: center;">
                    <div style="width: 900px; display: flex; justify-content: center;">
                        <input class="form-control" type="text" name="name" placeholder="Search...." id="myFilter" />
                    </div>
                </div>

                <!-- MDOAL-->
                <div id="nuevo" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="panel panel-success">
                                <div style=" background-color:#FF7F27;" class="panel-heading">
                                    <h2 style="color:#FFFFFF;"class="panel-title">Books Request</h2>
                                </div>
                                <form action="../bd/request.php" method="post" class="login-form col-7 d-flex flex-wrap">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="t_name" class="form-control" placeholder="Write there a Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <input type="text" name="t_gen" class="form-control"  placeholder="Write there a Genre">
                                        </div>
                                        <div class="form-group">
                                            <label>Editorial</label>
                                            <input type="text" name="t_editorial" class="form-control"  placeholder="Write there a Editorial">
                                        </div>
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input type="text" name="t_autor" class="form-control" placeholder="Write there a Author">
                                        </div>
                                        <div style=" padding-top: -30px; " id="menosmargen">
                                            <button type="submit" class='btn btn-default animation animated-item-2' style=" margin-right: 15px; background-color: #FF500A; color: white" name="registrar2"><u><b> Click Here to Request<b></u></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LIBROS -->
                <div class="row text-center" >  

                    <!-- Prueba de codigo V2 --> 
                    <div id='cuerpo' >
                        <!-- Aqui ban los libros 270-->
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

        <script>
            const tabla = document.querySelector('#cuerpo');
            const opciones = {
                method : 'POST'
            }

            fetch('../bd/bdjson.php', opciones)
                .then(respuesta => respuesta.json())
                .then(resultado =>{
                    resultado.forEach(elemento => {
                        tabla.innerHTML += `
                        <div class="col-sm-4 col-md-3 icons-hover-color bottom-xs-pad-20" data-animation="fadeInRight" data-role="proyectos" >
                            <div class="image">
                                <img src="../Resources/books/${elemento.BookCoverPage}" alt="" title="" width="230" style="border-radius:15px; box-shadow: 6px 10px 20px black;" />
                            </div>
                            <div class="description" id="busqueda">
                                <h4 class="name">${elemento.BookTitle}</h4>
                                <div class="role">
                                    <p>
                                        ${elemento.EditorialName} <br>
                                        ${elemento.BookISBN} <br> 
                                        ${elemento.BookRating} <i class="fa fa-star text-color"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        `
                    });
                });
        </script>

        <script>
            const tabla2 = document.querySelector('#cuerpo2');
            const opciones2 = {
                method : 'POST'
            }

            fetch('../bd/bdjson_ordenados.php', opciones2)
                .then(respuesta2 => respuesta2.json())
                .then(resultado2 =>{
                    resultado2.forEach(elemento2 => {
                        tabla2.innerHTML += `
                        <div style="display: inline-block;" class=" dos icons-hover-color xs-margin-10" data-animation="fadeInRight " >
                            <div class="image">
                                <img src="../Resources/books/${elemento2.BookCoverPage}" alt="" title="" width="200" style="border-radius:10px; margin-left: 60px; box-shadow: 4px 8px 10px black;"  />
                            </div><br>
                            <div >
                                <p class="text-short"><b> ${elemento2.BookTitle} </b></p>
                                <p class="text-short">${elemento2.EditorialName}</p>
                                <div style= "display: flex; ">    
                                    <p class="text-short">${elemento2.BookRating}</p>
                                    <div  style = "color:#555555;  padding-top: 5px" class = "fa fa-star" > </div> 
                                </div>
                            </div>
                        </div>
                        `
                    });
                });
        </script>

        <script>
            $(document).ready(function() {
                $("#myFilter").on("keyup", function() {
                    var value = document.getElementById("myFilter").value.toLowerCase();
                    $(('div[data-role="proyectos"]')).filter(function() {
                            $(this).toggle($(this).find('#busqueda').text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });

        </script>


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

