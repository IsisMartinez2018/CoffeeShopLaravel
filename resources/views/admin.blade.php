<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Cappuccino Coffee Restaurants Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Cappuccino Coffee Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap(2).css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
    <!-- Banner CSS -->
    <link rel="stylesheet" href="css/style(2).css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Arizonia&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Timmana&amp;subset=telugu" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
    <!-- header -->
    <div class="header">
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href="index.html">Cappuccino
                    <span>Coffee</span>
                </a>
            </h1>
            <!-- //logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/IM/public/homevista">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="nav-link" href="/IM/public/aboutus">About Us</a>
                    </li>
                    <li class="nav-item dropdown mr-lg-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/IM/public/menu">Menu</a>
                            <a class="dropdown-item scroll" href="#services">Services</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/IM/public/aboutus">Team</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/IM/public/gallery">Gallery</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="nav-link" href="/IM/public/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/IM/public/contactus">Contact Us</a>
                    </li>
                    <br>
                    <li class="nav-item" style="margin-left: 25px">
                        <a class="nav-link" href="/IM/public/orders/create">
                                       
                                    Pedidos&nbsp;&nbsp;</a>
                    </li>

                    
                    <li class="nav-item dropdown mr-lg-4">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             Bienvenido, admin &nbsp;{{ Auth::user()->name }}

                        <img src="{{ URL::asset("/images/cup.png") }}" style="top: 130px; left: 650px;height: 30px; width: 30px; border:none;"></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/IM/public/login">Perfil</a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a><form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                </li>


                </ul>
            </div>
        </nav>
        <!-- //navigation -->
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="banner">
        <div id="carouselExampleControls" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000"
            data-pause="hover">
            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/banner.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption">
                        <h4 data-animation="animated flipInX">A real Italian cafe</h4>
                        <h3 data-animation="animated flipInX" class="text-capitalize">Discover the taste of real coffee</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner4.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h4 data-animation="animated flipInX">A real Italian cafe</h4>
                        <h3 data-animation="animated flipInX" class="text-capitalize">Discover the taste of real coffee</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner1.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h4 data-animation="animated flipInX">A real Italian cafe</h4>
                        <h3 data-animation="animated flipInX" class="text-capitalize">Discover the taste of real coffee</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner3.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption">
                        <h4 data-animation="animated flipInX">A real Italian cafe</h4>
                        <h3 data-animation="animated flipInX" class="text-capitalize">Discover the taste of real coffee</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h4 data-animation="animated flipInX">A real Italian cafe</h4>
                        <h3 data-animation="animated flipInX" class="text-capitalize">Discover the taste of real coffee</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev left kb_control_left" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next right kb_control_right" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- //banner -->


    <!-- about -->
    <div class="about-section py-5">
        <div class="container py-xl-5 py-lg-3">
            <h5 class="tittle-w3 text-dark text-center mb-4">Welcome</h5>
            <div class="about-top text-center mb-5">
                <h3 class="subheading-wthree mb-2">A Few Words About Us</h3>
                <p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                    arcu, sed interdum risus.Integer quis tristique est, et egestas odio. Mauris ac tristique arcu, sed interdum risus.
                </p>
            </div>
            <div class="row about-main">
                <div class="col-lg-6 about-img">
                    <img src="images/about.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 about-w3ls-right">
                    <h3 class="subheading-wthree mb-2">We are popular in</h3>
                    <p class="para-w3l">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 mt-4">
                            <i class="fas fa-hand-point-right mr-3"></i>Sed do eiusmod tempor</li>
                        <li class="mb-3">
                            <i class="fas fa-hand-point-right mr-3"></i>Eaque ipsa quae illo</li>
                        <li class="mb-3">
                            <i class="fas fa-hand-point-right mr-3"></i>Magni dolores eos qui</li>
                        <li>
                            <i class="fas fa-hand-point-right mr-3"></i>Neque porro quism est</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//about-->

    <!-- video play -->
    <div class="about-bottom text-center py-5">
        <div class="container py-xl-5 py-lg-3">
            <p class="text-white">Cappuccino Coffee</p>
            <h4 class="text-white mx-auto font-italic my-4">Experience The Amazing & Rich Flavour</h4>
        </div>
    </div>
    <!-- //video play -->

    <!-- middle section -->
    <div class="section-middle">
        <div class="d-flex">
            <div class="col-md-6 left-gids-agile">
                <i class="fas fa-coffee "></i>
                <h4 class="bottom-title-w3ls text-dark my-4 pb-3">Duis aute irure dolor in reprehenderit </h4>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>
            </div>
            <div class="col-md-6 w3ls-right">
                <div class="agile-width">
                    <h4 class="bottom-title-w3ls text-dark my-4 pb-3">Duis aute irure dolor in reprehenderit </h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                        qui
                    </p>
                </div>
            </div>
        </div>
        <img src="images/middle.png" alt="" class="img-fluid img-posi">
    </div>
    <!-- //middle section -->

    <!-- middle section 2 -->
    <div class="mobile-section py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row w3ls-section-features p-md-5 py-md-0 py-4 px-md-0 px-3">
                <div class="col-sm-6 services-left-w3-agile">
                    <h5 class="tittle-w3-2 mb-md-4 mb-3 text-white">Our Features</h5>
                    <ul class="list-unstyled lists-w3lswe">
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Onsecter ing elit</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Sed do eimod tempor</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Ex ea codo conseq</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Dolore euat nulla</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Excepteur sint ecat</li>
                    </ul>
                </div>
                <div class="col-sm-6 services-right-w3-agile mt-sm-0 mt-4">
                    <h5 class="tittle-w3-2 mb-md-4 mb-3 text-white">Our Works</h5>
                    <ul class="list-unstyled lists-w3lswe">
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Tetur adipiscing</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Seo eiusmod tempor</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Ex commodo cont</li>
                        <li class="mb-2">
                            <i class="fas fa-long-arrow-alt-right mr-3"></i>Dol fugiat nulla</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //middle section 2 -->

    <!-- services -->
    <div class="servies py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h5 class="tittle-w3 text-dark text-center mb-sm-5 mb-4">Services</h5>
            <div class="d-flex skill_info_wthree_agile">
                <div class="col-md-4 banner_bottom_left">
                    <div class="row">
                        <div class="col-3 banner_bottom_grid_left text-center mb-3">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <div class="col-9 banner_bottom_grid_right mt-1 mb-4">
                            <h3>Services 1</h3>
                        </div>
                        <p>Lorem ipsum dolor, consectetur adipiscing elit,morbi viverra lacus commodo felis semper.</p>
                    </div>
                </div>
                <div class="col-md-4 banner_bottom_left text-center mt-md-0 mt-3 mb-md-0 mb-5">
                    <img src="images/service.png" alt="" class="img-fluid">
                    <div class="banner_bottom_grid_right mt-5 mb-2">
                        <h3>Services 2</h3>
                    </div>
                    <p>Lorem ipsum dolor, consectetur adipiscing elit,morbi viverra lacus commodo felis semper.</p>
                </div>
                <div class="col-md-4 banner_bottom_left">
                    <div class="row">
                        <div class="col-3 banner_bottom_grid_left text-center mb-3">
                            <i class="fas fa-glass-martini"></i>
                        </div>
                        <div class="col-9 banner_bottom_grid_right mt-1 mb-4">
                            <h3>Services 3</h3>
                        </div>
                        <p>Lorem ipsum dolor, consectetur adipiscing elit,morbi viverra lacus commodo felis semper.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- footer -->
    <footer>
        <div class="w3ls-footer-grids py-5">
            <div class="container py-lg-2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 w3l-footer one">
                        <h2 class="index.html mb-3">Cappuccino Coffee</h2>
                        <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-2 col-sm-6 w3l-footer agileinfo_footer_grid my-sm-0 my-4">
                        <h3 class="mb-3">Navigation</h3>
                        <div class="nav-w3-l">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="mb-2">
                                    <a href="about.html" class="">About Us</a>
                                </li>
                                <li class="mb-2">
                                    <a href="menu.html" class="">Menu</a>
                                </li>
                                <li class="mb-2">
                                    <a href="gallery.html" class="">Gallery</a>
                                </li>
                                <li>
                                    <a href="contact.html" class="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 w3l-footer two mt-lg-0 mt-sm-5">
                        <h3 class="mb-3">Connect With</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a class="fb" href="#">
                                    <i class="fab fa-facebook-f"></i>Like us on Facebook</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb1" href="#">
                                    <i class="fab fa-twitter"></i>Follow us on Twitter</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb2" href="#">
                                    <i class="fab fa-google-plus-g"></i>Add us on Google Plus</a>
                            </li>
                            <li>
                                <a class="fb3" href="#">
                                    <i class="fab fa-dribbble"></i>Follow us on Dribbble</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 w3l-footer three mt-lg-0 mt-4">
                        <h3 class="mb-3">Address</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker"></i>
                                <p>The company name
                                    <span>Lorem ipsum dolor,</span>New York,Morris Park. </p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="my-2">
                                <i class="fas fa-phone"></i>
                                <p>1234567890</p>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@example.com">mail@example.com</a>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-grids py-3">
            <p class="footer-gd text-center text-white">© 2018 Cappuccino Coffee. All Rights Reserved | Design by
                <a href="https://w3layouts.com/" target="_blank">W3layouts</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->


    <!-- Js files -->
    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->
    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- smooth scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth scrolling -->

    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/coffee.js"></script>

    <!-- //Js files -->

</body>

</html>