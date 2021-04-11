@extends('layouts.front')
@section('main')

<!-- header -->
<header class="site-header">
   <nav class="navbar navbar-expand-lg padding-nav static-nav">
      <div class="container">
         <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="logo">
         </a>
         <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-auto">
               <li class="nav-item dropdown position-relative">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false"> Компания </a>
                  <ul class="dropdown-menu megamenu">
                     <li>
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-6 col-md-9 col-sm-12">
                                 <a class="dropdown-item" href="index.html">Главная</a>
                                 <a class="dropdown-item active" href="about.html">О Нас</a>
                                 <a class="dropdown-item" href="blog-1.html">Новости</a>
                                 <a class="dropdown-item" href="team.html">Наша команда</a>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="nav-item dropdown position-relative">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">Услуги </a>
                  <ul class="dropdown-menu megamenu">
                     <li>
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-6 col-md-9 col-sm-12">
                                 <a class="dropdown-item" href="services.html">Услуги</a>
                                 <a class="dropdown-item" href="faq.html">FAQ's</a>
                                 <a class="dropdown-item" href="testimonial.html">Отзывы</a>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  position-relative">
                  <a class="nav-link" href="project.html" aria-haspopup="true" aria-expanded="false"> Проекты </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.html">Контакты</a>
               </li>

            </ul>
         </div>
         <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
            <li><a href="https://www.facebook.com/NapaAutomotive"><i class="fab fa-facebook-f"></i> </a> </li>
            <li><a href="https://www.instagram.com/napa_automotive/?hl=ru"><i class="fab fa-instagram"></i> </a> </li>
            <li><a href="https://youtube.com/channel/UC8Q8q_I258NsrU3jq_6MzmQ"><i class="fab fa-youtube"></i> </a> </li>
         </ul>
      </div>
   </nav>
</header>
<!-- header -->
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header shop-header section-nav-smooth parallax">
   <div class="overlay overlay-dark opacity-6 z-index-1"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="page-titles whitecolor text-center padding_top padding_bottom">
               <h2 class="font-xlight">Первый системный </h2>
               <h2 class="font-bold">IT интегратор </h2>
               <h2 class="font-xlight">Napa Automotive</h2>
               <!-- <h3 class="font-light pt-2">The Best Multipurpose Creative & Parallax Template</h3> -->
            </div>
         </div>
      </div>
      <div class="gradient-bg title-wrap">
         <div class="row">
            <div class="col-lg-12 col-md-12 whitecolor">
               <h3 class="float-left">Проекты</h3>
               <ul class="breadcrumb top10 bottom10 float-right">
                  <li class="breadcrumb-item hover-light"><a href="index.html">Главная</a></li>
                  <li class="breadcrumb-item hover-light">Проекты</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Page Header ends -->
<!--Shopping-->
<section id="our-shop" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2">Наши <span class="font-normal"> Проекты</span>
               <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2 heading_space">
               <p>Проекты которые мы реализовали:</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/project-uzyul.jpg" alt="our project">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">веб приложение</h4>
                  <p>Платформа учета деревьев и куст для
                     "Ўзйўлкўкаламзорлаштириш"</p>
                  <h4 class="price-product"><a href="uzyulkokalam.uz">uzyulkokalam.uz</a> </h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="400ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/alviero.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Веб-сайт</h4>
                  <p>ALVIERO LOGISTICS </p>
                  <h4 class="price-product"><a href="shop-detail.html">Alvierologistics.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/mycareer.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Веб приложение</h4>
                  <p>Веб приложение для карьерного центра.</p>
                  <h4 class="price-product"><a href="mycareer.uz">Mycareer.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/tayniy.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Веб приложение + Android.</h4>
                  <p>Система управление персоналом и оценка
                     сотрудников методом “Тайный Покупатель"</p>
                  <h4 class="price-product"><a href="http://agent.workey.space">http://agent.workey.space</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="400ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/foxmedia.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Веб
                     приложение + Android.</h4>
                  <p>“Fox Media” система управление учебным
                     процессом и видео контентом</p>
                  <h4 class="price-product"><a href="demo.foxmedia.uz">demo.foxmedia.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/erp.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">ERP система</h4>
                  <p>Разработка и внедрение ERP система для
                     высших учебных на базе коробочного версии
                     системы</p>
                  <h4 class="price-product"><a href="http://erp.complex.uz">erp.complex.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/reno.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Веб сайт</h4>
                  <p>Веб сайт для учебного центра “Ёшлар Илм
                     Маркази</p>
                  <h4 class="price-product"><a href="www.complex.uz">www.complex.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/sudex.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">LMS</h4>
                  <p>Система контроля учебным процессом (LMS) для суд
                     экспертизы</p>
                  <h4 class="price-product"><a href="www.sudex.uz">www.sudex.uz</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="images/webportal.jpg" alt="webportal">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">Интерактивный веб портал</h4>
                  <p>Академия
                     Генеральной прокуратуры Республики
                     Узбекистан</p>
                  <h4 class="price-product"><a href="https://new.proacademy.uz/ru">https://new.proacademy.uz/ru#</a>
                  </h4>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12">
            <ul class="pagination justify-content-center top20 wow fadeInUp" data-wow-delay="400ms">
               <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-left"></i></a></li>
               <li class="page-item active"><a class="page-link" href="#.">1</a></li>
               <li class="page-item"><a class="page-link" href="#.">2</a></li>
               <li class="page-item"><a class="page-link" href="#.">3</a></li>
               <li class="page-item"><a class="page-link" href="#."><i class="fa fa-angle-right"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--Shopping ends-->
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
                        <button type="submit" class="button gradient-btn w-100" id="submit_btn">Oтправить</button>
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
