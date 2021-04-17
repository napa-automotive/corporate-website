@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h1 class="font-bold">Новости</h1>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Новости</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item hover-light">Новости</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Blogs --}}
<section id="our-blog" class="bglight padding">
    <div class="container">
        <div id="blog-measonry" class="cbp">
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/blog-measonry1.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Наша компания входит в группу
                                компаний «NAPA TEAM»</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Feb 14</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>8</a></li>
                        </ul>
                        <p class="bottom35">Наша компания входит в группу компаний «NAPA TEAM» основной деятельностью
                            которой является осуществление образовательного проекта в сфере IT</p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/blog-measonry2.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">ООО «NAPA AUTOMOTIVE» стала
                                резидентом ITPark</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Sep 16</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>17 </a></li>
                        </ul>
                        <p class="bottom35">В январе 2020 года ООО «NAPA AUTOMOTIVE» стала резидентом ITPark Узбекистана
                        </p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/blog-image6.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Haskell — ленивый язык
                                программирования</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Sep 26</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>12 </a></li>
                        </ul>
                        <p class="bottom35">Haskell — необычный язык с точки зрения тех, кто привык к
                            JavaScript,С++,Python или любому другому императивному языку. </p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/video.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Мастер класс</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Apr 14</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>6 </a></li>
                        </ul>
                        <p class="bottom35">Прошёл очередной мастер класс по креативу от Мирисмоил Абдуллох @muamiruz
                            который является Art директором “Mirdezayn Creative Agency” @mirdezayn, создатель более 50
                            успешных креативов.
                            ⠀
                            💡В ходе этого мастер класса участники научились создавать нестандартные идеи для своих же
                            креативов в своей сфере.</p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/blog-measonry4.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Встречайте 48-часовой «Хакатон»!
                            </a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Dec 24</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>19 </a></li>
                        </ul>
                        <p class="bottom35">
                            Мы запустили 48-часовой хакатон в рамках проекта «My career» от NAPA Automotive!</p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/blog-measonry3.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Demo day</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>dec 13</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>8 </a></li>
                        </ul>
                        <p class="bottom35">НАПА Автомотив под руководством Умида Абдусатторова организует мероприятие
                            на базе проекта «Мy career» по поддержке стартап-проектов в Узбекистане, их реализации,
                            помощи в трудоустройстве выпускников вузов и других учебных заведений.
                            .</p>
                        <a href="#" class="button gradient-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <!--Pagination-->
                <ul class="pagination justify-content-center top40">
                    <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#."><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
