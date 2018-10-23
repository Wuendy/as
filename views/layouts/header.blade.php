<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> </title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('/css/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('/css/css/owl.carousel.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/css/css/owl.theme.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/css/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ asset('/css/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/css/style6.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('/css/css/fontawesome-all.css')}}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800')}}" rel="stylesheet">
    <link href="{{ asset('//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i')}}" rel="stylesheet">
    <!--//web font-->

</head>

<body>
    <!-- banner -->
    <section class="banner-inner" id="home">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index.html">
				<img src="{{ asset('css/images/landmark.svg')}}" style="height:60px;width:60px;">  Rashōmon
                </a></h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active cool">
                                <a class="nav-link" href="index.html">Inicio
                            
                        </a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="about.html">Acerca</a>
                            </li>
                           
                            <li class="nav-item cool">
                                <a class="nav-link" href="gallery.html">Vocabulario & Kanji</a>
                            </li>
                            <li class="nav-item dropdown cool">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lecci&oacute;n
                        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Hiragana</a>
                                    <a class="dropdown-item" href="single.html">Katakana</a>
                                    <a class="dropdown-item" href="blog.html">Particulas</a>
                                    <a class="dropdown-item" href="blog.html">N&uacute;meros</a>
                                    <a class="dropdown-item" href="single.html">Pronunciacion</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="404.html">Profesores</a>
                                </div>
                            </li>

                            <li class="nav-item cool">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <!-- /search -->
                            <li class="search">
                                <div class="cd-main-header">
                                    <ul class="cd-header">
                                        <li>
                                            <a class="cd-search-trigger" href="#">
                                                    <span></span>
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="cd-search" class="cd-search">
                                    <form action="#" method="post">
                                        <input name="Search" type="search" placeholder="Click enter after typing...">
                                    </form>
                                </div>
                            </li>

                            <!-- /search -->

                        </ul>


                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="bs-slider-overlay-inner">
        </div>
    </section>

@yield('content')