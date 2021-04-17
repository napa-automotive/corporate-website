@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header shop-header section-nav-smooth parallax">
   <div class="overlay overlay-dark opacity-6 z-index-1"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="page-titles whitecolor text-center padding_top padding_bottom">
               <h2 class="font-xlight">{{ __('The first system') }}</h2>
               <h2 class="font-bold">{{ __('IT integrator') }}</h2>
               <h2 class="font-xlight">Napa Automotive</h2>
            </div>
         </div>
      </div>
      <div class="gradient-bg title-wrap">
         <div class="row">
            <div class="col-lg-12 col-md-12 whitecolor">
               <h3 class="float-left">{{ __('Projects') }}</h3>
               <ul class="breadcrumb top10 bottom10 float-right">
                  <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
                  <li class="breadcrumb-item hover-light">{{ __('Projects') }}</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

{{-- Projects --}}
<section id="our-shop" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2">
               {{ __('Our projects') }}
               <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2 heading_space">
               <p>{{ __('Projects that we have implemented') }}:</p>
            </div>
         </div>

         {{-- Project 1 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/project-uzyul.jpg" alt="our project">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web application') }}</h4>
                  <p>{{ __('A tree accounting platform and a bush for «Uzyulkukalamzorlashtirish»') }}</p>
                  <h4 class="price-product"><a href="http://uzyulkokalam.uz">uzyulkokalam.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 2 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="400ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/alviero.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web site') }}</h4>
                  <p>ALVIERO LOGISTICS</p>
                  <h4 class="price-product"><a href="#">Alvierologistics.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 3 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/mycareer.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web application') }}</h4>
                  <p>{{ __('Career Center Web Application') }}</p>
                  <h4 class="price-product"><a href="http://mycareer.uz">Mycareer.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 4 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/tayniy.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web application') }} + Android</h4>
                  <p>{{ __('Personnel management system and employee assessment using the «Mystery Shopper» method') }}</p>
                  <h4 class="price-product"><a href="http://agent.workey.space">agent.workey.space</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 5 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="400ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/foxmedia.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web application') }} + Android.</h4>
                  <p>{{ __('“Fox Media” educational process and video content management system') }}</p>
                  <h4 class="price-product"><a href="http://foxitmedia.uz">www.foxitmedia.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 6 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/erp.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('ERP system') }}</h4>
                  <p>{{ __('Development and implementation of an ERP system for higher education based on a boxed version of the system') }}</p>
                  <h4 class="price-product"><a href="http://erp.complex.uz">erp.complex.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 7 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/reno.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Web site') }}</h4>
                  <p>{{ __('Website for the “Yoshlar Ilm Markazi” training center') }}</p>
                  <h4 class="price-product"><a href="http://www.complex.uz">www.complex.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 8 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/sudex.jpg" alt="shop">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('LMS') }}</h4>
                  <p>{{ __('Learning Management System (LMS) for court examination') }}</p>
                  <h4 class="price-product"><a href="http://mtsudex.uz">www.sudex.uz</a></h4>
               </div>
            </div>
         </div>

         {{-- Project 9 --}}
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="/images/webportal.jpg" alt="webportal">
               </div>
               <div class="shop-content text-center">
                  <h4 class="darkcolor">{{ __('Interactive web portal') }}</h4>
                  <p>{{ __('Academy of the General Prosecutor\'s Office of the Republic of Uzbekistan') }}</p>
                  <h4 class="price-product"><a href="http://new.proacademy.uz/ru">new.proacademy.uz</a>
                  </h4>
               </div>
            </div>
         </div>
         {{-- <div class="col-lg-12 col-md-12">
            <ul class="pagination justify-content-center top20 wow fadeInUp" data-wow-delay="400ms">
               <li class="page-item"><a class="page-link disabled" href="#"><i class="fa fa-angle-left"></i></a></li>
               <li class="page-item active"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
         </div> --}}
      </div>
   </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
