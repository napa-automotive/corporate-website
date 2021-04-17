@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header service-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight pt-3">Поднимите</h2>
                    <h2 class="font-bold"> ваш бизнес</h2>
                    <h2 class="font-xlight">на новый уровень</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Наши Услуги</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item hover-light">Услуги</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Services --}}
<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-light">Наши Услуги</span>
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2">
                <p class="mb-n3">Мы всегда стремимся в каждом проекте использовать
                    инноваций подход, как устойчивого конкурентного
                    преимущества</p>
            </div>
        </div>
        <div id="services-filter" class="cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto" data-wow-delay="350ms">
            <div data-filter="*" class="cbp-filter-item">
                <span>All</span>
            </div>
            <div data-filter=".digital" class="cbp-filter-item">
                <span>Digital</span>
            </div>
            <div data-filter=".design" class="cbp-filter-item">
                <span>Design</span>
            </div>
            <div data-filter=".brand" class="cbp-filter-item">
                <span>Brand</span>
            </div>
            <div data-filter=".graphics" class="cbp-filter-item">
                <span>Graphics</span>
            </div>
        </div>

        <div id="services-measonry" class="cbp">
            @foreach ($services as $service)
                <div class="cbp-item digital brand design">
                    <div class="services-main">
                        <div class="image bottom10">
                            <div class="image"><img alt="SEO" src="{{ $service->image }}"></div>
                            <div class="overlay">
                                <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="services-content brand text-center text-md-left">
                            <h3 class="bottom10 darkcolor"><a href="#">{{ $service->name }}</a></h3>
                            <p class="bottom15"> {{ $service->description }} </p>
                            <a href="#" class="button-readmore">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="cbp-item digital graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="/images/service-2.jpg"></div>
                        <div class="overlay">
                            <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="#">Разработка веб приложении</a></h3>
                        <p class="bottom15">Обеспечение информационной безопасности всех реализуемых систем<br>
                        </p>
                        <a href="#" class="button-readmore">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item design">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="/images/service-3.jpg"></div>
                        <div class="overlay">
                            <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="#">ИТ-консалтинг и ИТ-аудит</a></h3>
                        <p class="bottom15">Техническая поддержка, Аутсорсинг и Аутстаффинг IT услуг
                        </p>
                        <a href="#" class="button-readmore">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="/images/service-4.jpg"></div>
                        <div class="overlay">
                            <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="#">Разработка и внедрения автоматизированных систем</a>
                        </h3>
                        <p class="bottom15">Разработка и внедрение бизнес-приложений, в том числе ERP и CRM
                        </p>
                        <a href="#" class="button-readmore">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item digital">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="/images/service-5.jpg"></div>
                        <div class="overlay">
                            <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="#">Разработка мобильных приложений IOS/Android</a></h3>
                        <p class="bottom15">Подключение существующих информационных систем к СМЭВ
                        </p>
                        <a href="#" class="button-readmore">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item brand design graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="/images/service-6.jpg"></div>
                        <div class="overlay">
                            <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="#">Подготовка и обучение персонала</a></h3>
                        <p class="bottom15">Подготовка и обучение персонала заказчика работе с новыми системами
                        </p>
                        <a href="#" class="button-readmore">Подробнее</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
