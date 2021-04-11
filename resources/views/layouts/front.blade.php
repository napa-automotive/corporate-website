<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Napa Automotive</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooltipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/revolution/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/revolution/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('images/logo-transparent.png') }}" alt="logo" class="logo-default">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item dropdown static">
                        <a class="nav-link active" href="index.html" aria-haspopup="true" aria-expanded="false"> Компания </a>
                    </li> -->
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  Компания </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <a class="dropdown-item" href="{{ route('home') }}">Главная</a>
                                            <a class="dropdown-item" href="{{ route('about') }}">О Нас</a>
                                            <a class="dropdown-item" href="{{ route('new') }}">Новости</a>
                                            <a class="dropdown-item" href="{{ route('team') }}">Наша команда</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <a class="dropdown-item" href="{{ route('services') }}">Услуги</a>
                                            <a class="dropdown-item" href="{{ route('faq')}}">FAQ's</a>
                                            <a class="dropdown-item" href="{{ route('testimonial') }}">Отзывы</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  position-relative">
                        <a class="nav-link"  href="{{ route('project') }}"  aria-haspopup="true" aria-expanded="false"> Проекты </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--Main Slider-->
@yield('main')
<!-- Contact US ends -->
<!--Site Footer Here-->
<footer id="site-footer" class=" bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="" class="footer_logo bottom25"><img src="images/logo-transparent.png" alt="trax"></a>
                    <p class="whitecolor bottom25">Индивидуальное решение для ваших цифровых нужд</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            +998 97 750-00-04, <a class="d-block" href="mailto:umid.abdusattorov@me.com">info@napaautomotive.com</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="https://www.facebook.com/NapaAutomotive"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="https://youtube.com/channel/UC8Q8q_I258NsrU3jq_6MzmQ"><i class="fab fa-youtube"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="https://www.instagram.com/napa_automotive/?hl=ru"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Наши сервисы</h3>
                    <ul class="links">
                        <li><a href="">Компания</a></li>
                        <li><a href="about.html">О Нас</a></li>
                        <li><a href="blog-1.html">Новости</a></li>
                        <!-- <li><a href="javascript:void(0)">Business Planning</a></li> -->
                        <li><a href="contact.html">Контакты</a></li>
                        <!-- <li><a href="javascript:void(0)">Privacy Policy</a></li> -->
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        <li> <a href="#">Aenean tristique justo et... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#">Phasellus dapibus dictum augue... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#">Mauris blandit vitae. Praesent non... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Часы работы</h3>
                    <!-- <p class="whitecolor bottom25">Наша поддержка доступна, чтобы помочь вам 24 часа в сутки, семь дней в неделю</p> -->
                    <ul class="hours_links whitecolor">
                        <li><span>Пн-Сб:</span> <span>9.00-18.00</span></li>
                        <li><span>Пятница:</span> <span>09:00-21:00</span></li>
                        <li><span>Воскресенье:</span> <span>09:00-20:00</span></li>
                        <!-- <li><span> Календарь событий:</span> <span>24-ч.c</span></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!--Bootstrap Core-->
<script src="{{ asset('js/propper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--to view items on reach-->
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<!--Owl Slider-->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--number counters-->
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<!--Parallax Background-->
<script src="{{ asset('js/parallaxie.js') }}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
<!--Fancybox js-->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<!--tooltip js-->
<script src="{{ asset('js/tooltipster.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('js/wow.js') }}"></script>
<!--Revolution SLider-->
<script src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
<!--custom functions and script-->
<script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>
