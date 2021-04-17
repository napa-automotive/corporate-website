@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    <h2 class="font-bold">{{ __('Contact us') }}</h2>
                    <h3 class="font-light py-3">{{ __('We will be glad to see you here.') }}</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('Contacts') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item hover-light">{{ __('Contacts') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact us --}}
<section id="stayconnected" class="bglight position-relative padding noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1">
                        {{ __('Contact us') }}
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>{{ __('Company website address, links to corporate social networks:') }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 order-sm-2">
                    <div class="contact-meta px-2 text-center text-md-left">
                        <div class="heading-title">
                            <span class="defaultcolor mb-3">{{ __('Business process automation') }}</span>
                            <h3 class="darkcolor font-normal mb-4">
                                {{ __('Our head office') }}
                            </h3>
                        </div>

                        <p class="bottom10">
                            {{ __('Address:') }} {{ __('Uzbekistan, 100095, Tashkent, Almazar district, Kichik khalka yuli st., 17 in the building of the Turin Polytechnic University.') }}
                        </p>
                        <p class="bottom10"><a href="info@napaautomotive.com">info@napaautomotive.com</a></p>
                        <p class="bottom10">{{ __('Mon-Fri:') }} 9am-6pm</p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp" data-wow-delay="300ms">
                            {{-- #todo Provide social network links --}}
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <form class="getin_form wow fadeInUp px-2" data-wow-delay="400ms" onsubmit="return false;">
                            <div id="result1"></div>

                            <div class="form-group">
                                <label for="fullname" class="d-none"></label>
                                <input type="text" class="form-control" id="fullname" name="name" placeholder="{{ __('Fullname') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email_address" class="d-none"></label>
                                <input type="email" class="form-control" id="email_address" name="email" placeholder="{{ __('Email') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="message_content" class="d-none"></label>
                                <textarea class="form-control" id="message_content" name="message" placeholder="{{ __('Message') }}" required></textarea>
                            </div>

                            <button type="submit" id="submit_button" class="button gradient-btn w-100">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-mobile-alt"></i></span>
                        <p class="bottom0"><a href="tel:+998977500004">+998 97 750-00-04</a></p>
                        <p class="d-block"><a href="tel:+998900050034">+998 90 005-00-34</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="bottom0">{{ __('Tashkent') }}</p>
                        <p class="d-block">{{ __('Almazar district') }},</p>
                        <p class="d-block">{{ __('st. Kichik halqa yuli, 17') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-envelope"></i></span>
                        <p class="bottom0"><a href="info@napaautomotive.com">info@napaautomotive.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-clock"></i></span>
                        <p class="bottom15">{{ __('Mon-Fri from 9:00 to 18:00') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
