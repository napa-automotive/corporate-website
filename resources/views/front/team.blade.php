@extends('layouts.front')
@section('main')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header team-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-8    z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Познакомьтесь</h2>
                    <h2 class="font-bold">с нашей лучшей </h2>
                    <h2 class="font-xlight">ведущей командой</h2>
                    <!-- <h3 class="font-light pt-2">Благородный, отзывчивый и элегантный</h3> -->
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Наша команда</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item hover-light">Наша команда</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!--team members-->
<section class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading_space animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Наша <span class="font-normal">команда</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-0">Мы молодая, динамично развивающаяся компания, команда профессионалов, имеющая опыт
                        внедрения ИТ услуг во все сферы деятельности организации. </p>
                </div>
            </div>
        </div>
        <div class="row equal-shadow-team">
            <!--item 1-->
            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-4">
                    <div class="team-box wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <img src="{{ $team->image }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="darkcolor">{{ $team->name }}</h4>
                            <p>{{ $team->job }}</p>
                            <ul class="social-icons-simple">
                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--team members end-->
<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <span class="count_nums font-light" data-to="2019" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Oснована в Узбекистане (году)</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">Мы молодая, динамично развивающаяся компания,
                    команда профессионалов, имеющая опыт внедрения ИТ услуг во все сферы деятельности организации.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="30" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Cотрудников</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->
<!--team section owl carousel-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <!-- <span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci</span> -->
                    <h2 class="darkcolor font-normal bottom30 text-center text-md-left">Наши резиденты</h2>
                </div>
                <!-- <h3 class="font-light whitecolor top20"> </h3> -->

                <div class="ourteam-slider owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/resident-1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Bahodir Abdusalimov </h4>
                                <p>Frontend developer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/resident-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Sardor </h4>
                                <p>Php Backend developer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="images/resident-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Malika</h4>
                                <p>SMM</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/resident-4.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Elbek Bakiyev</h4>
                                <p>React Frontend developer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/resident-5.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Xasan Abdumo'minov </h4>
                                <p>Print Media</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/resident-6.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Maftuna Zakirova</h4>
                                <p>IOS developer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                            <div class="team-box">
                                <div class="image">
                                    <img src="images/team-member-8.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4 class="darkcolor">Ольга Зборовская</h4>
                                    <p>HR manager</p>
                                    <ul class="social-icons-simple">
                                        <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                        <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                        <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="ourteam-slider owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jason Wudex </h4>
                                <p>Designer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="images/team-member-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-4.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Hayden Wood</h4>
                                <p>Marketing</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Shania Jackson </h4>
                                <p>Print Media</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-member-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                                        </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
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
<!--team section ends-->
<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative ">
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
                                        name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Компания" id="companyName"
                                        name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100"
                                    id="submit_btn">Oтправить</button>
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
