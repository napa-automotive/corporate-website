@extends('layouts.front')
@section('main')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Первый системный</h2>
                    <h2 class="font-bold">IT интегратор</h2>
                    <h2 class="font-xlight">Napa Automotive</h2>
                    <!-- <h3 class="font-light pt-2">Национальная Ассоциация по Автоматизации Процессов</h3> -->
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">О нашей компании</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light">
                            <a href="/">Главная</a>
                        </li>
                        <li class="breadcrumb-item hover-light">О нас</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->

<!-- About us -->
<section id="aboutus" class="padding_top padding_bottom">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <div class="image">
                    <img alt="SEO" src="/images/aboutus.jpg" />
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">
                    Поднимем ваш<span class="defaultcolor"> бизнес</span> на
                    новый уровень
                </h2>
                <p class="bottom35">
                    Мы команда профессионалов, имеющая ИТ опыт в различных
                    сферах, которая постоянно развивается и соответственно,
                    расширяет спектр предлагаемых услуг. Благодаря глубокому
                    изучению и пониманию потребностей наших клиентов, высокой
                    квалификации специалистов, постоянному совершенствованию
                    своих навыков мы предлагаем свои услуги на профессиональном
                    уровне по оптимальной цене.
                </p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll">Подробнее</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 padding_top_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">
                    Лучший набор навыков, доступный в
                    <span class="defaultcolor">нашей компании</span>
                </h2>
                <p class="bottom35">
                    Для разработки сайтов и приложении - PHP,Python, .NET и Java
                    и самые современные технологии Bootstrap и React, VUE,
                    Angular, позволяющие создавать интернет-приложения,
                    пригодные к работе на любых видах устройств.
                </p>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">
                <div class="progress-bars">
                    <div class="progress">
                        <p>Python / Django</p>
                        <div class="progress-bar gradient-bg" data-value="94">
                            <span class="gradient-bg whitecolor">94%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>Php / Laravel</p>
                        <div class="progress-bar gradient-bg" data-value="92">
                            <span class="gradient-bg whitecolor">92%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>React / Vue js</p>
                        <div class="progress-bar gradient-bg" data-value="86">
                            <span class="gradient-bg whitecolor">86%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us ends -->

<!-- Work Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <span>Внедрение комплексных программных и аппаратных IT
                        cистем включает в себя следующие этапы:
                    </span>
                    <h2 class="font-normal">Наш рабочий процесс</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">План</p>
                    <p class="mt-n2 mt-sm-0">
                        Сбор требований/Оценка и планирование работ
                    </p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">ТЗ</p>
                    <p class="mt-n2 mt-sm-0">
                        Разработка технического задания и спецификаций
                    </p>
                </li>
                <li class="whitecolor wow fadeIn active" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Разработка</p>
                    <p class="mt-n2 mt-sm-0">
                        Разработка интерфейсов/Написание кода
                    </p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Тестирование</p>
                    <p class="mt-n2 mt-sm-0">
                        Контроль качества разрабатываемого приложения
                    </p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Сопровождение системы</p>
                    <p class="mt-n2 mt-sm-0">
                        Вторая и третья линии технической поддержки
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->

<!-- Our Team-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                    <!-- <span class="defaultcolor">Quisque tellus risus, adipisci</span> -->
                    <h2 class="darkcolor bottom30 font-normal">
                        Познакомьтесь с нашей командой
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-left">
                <p class="heading_space">
                    Мы команда профессионалов, имеющая ИТ опыт в различных
                    сферах, которая постоянно развивается и соответственно,
                    расширяет спектр предлагаемых услуг
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="ourteam-slider owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-1.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Umid Abdusattorov</h4>
                                <p>CEO</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="https://www.facebook.com/NapaAutomotive"><i
                                                class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-2.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Sayidazim Mahmudov</h4>
                                <p>Php Backend developer</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="/images/team-member-3.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Shavkat Homidov</h4>
                                <p>Project architecture</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-4.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Madina Kaxxarova</h4>
                                <p>project architectureProject manager</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-5.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Bekzod Erkinov</h4>
                                <p>Backend Developer</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-6.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Azimjon Salimov</h4>
                                <p>Android developer</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="/images/team-member-7.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Kamila Nazarova</h4>
                                <p>Android developer</p>
                                <ul class="social-icons-simple">
                                    <li>
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->

<!-- Partners-->
<section id="our-partners" class="padding_top padding_bottom bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="d-none">Carousel Is Here</h2>
                <div id="partners-slider" class="owl-carousel">
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-1.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-2.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-3.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-4.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-5.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-1.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-2.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-3.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-4.png" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-item">
                            <img alt="" src="/images/logo-5.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners ends-->

<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Оставайтесь на связи</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="ФИО" required id="userName"
                                        name="userName" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Компания" id="companyName"
                                        name="companyName" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email"
                                        name="email" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">
                                    Oтправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
@endsection
