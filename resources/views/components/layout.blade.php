<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Shahadat Hossain Tahmid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Personal Portfolio Website" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Shahadat Hossain Tahmid" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="images/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Poppins:200,400,500,700,800&display=swap' rel='stylesheet' type='text/css'>                     
        <link rel="stylesheet" href="{{ asset('css/clear.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">        
        <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>            
            <script src="js/respond.min.js"></script>                   
        <![endif]-->                
    </head>

    <body class="one-page"> 

        <div class="doc-loader"></div>

        <div class="container">
            <div class="page-wrapper">

                <!-- ================= HEADER ================= -->
                <div id="nav-btn" class="nav-btn">
                    <span class="nav-btn-cover">
                        <span class="menu-line"></span>                   
                    </span>
                </div>
                <div class="s-nav">
                    <div class="nav-count">
                        <div class="current-num">
                            <span>01</span>
                        </div>
                        <div class="pagination-sep">/</div>
                        <div class="total-pages-num">07</div>
                    </div>                                                            
                    <div class="nav-container">
                        <a class="site-title slow-scroll" href="#home">Shahadat Hossain</a>
                        <nav class="nav-menu">
                            <ul class="nav-list">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>                                                                        
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#skills">Skills</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <ul class="nav-soc">
                        <li><a href="#">TW.</a></li>
                        <li><a href="#">IN.</a></li>
                        <li><a href="#">FB.</a></li>
                    </ul>
                </div>
                <!-- =============== HEADER END =============== -->

                {{ $slot }}

            </div>
        </div>
        <!--=================== SCRIPT ===================-->
        <script type="text/javascript" src="{{  asset('js/jquery.js') }} "></script>       
        <script type="text/javascript" src="{{  asset('js/imagesloaded.pkgd.js') }} "></script>
        <script type="text/javascript" src="{{  asset('js/jquery.fitvids.js') }} "></script>
        <script type="text/javascript" src="{{  asset('js/jarallax.js') }} "></script>
        <script type="text/javascript" src="{{  asset('js/jarallax-element.min.js') }} "></script>
        <script type="text/javascript" src="{{  asset('js/isotope.pkgd.js') }} "></script>        
        <script type="text/javascript" src="{{  asset('js/jquery.prettyPhoto.js') }} "></script>                
        <script type="text/javascript" src='{{  asset('js/owl.carousel.min.js') }} '></script>                                                            
        <script type="text/javascript" src="{{  asset('js/app.js') }}"></script>
    </body>
</html>