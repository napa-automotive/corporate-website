@extends('layouts.app')
@section('main')

{{-- Main Slider --}}
@include('partials.home-slider')

{{-- Services --}}
<div class="container">
    <div id="services-slider" class="owl-carousel">
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-clipboard"></i></span>
                <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Хорошо документированный</a></h4>
                <p>Мы создаем безопасный, хорошо документированный и надежный код для вашего сайта</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-laptop"></i></span>
                <h4 class="bottom10"><a href="javascript:void(0)">Полностью отзывчивы</a></h4>
                <p>Благодаря слаженной работе наших специалистов, вы получите полностью отзывчивый ко всем
                    устройствам кроссплатформенный сайт</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="javascript:void(0)">Полная поддержка</a></h4>
                <p>Техническая поддержка, Аутсорсинг и Аутстаффинг IT услуг</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-edit"></i></span>
                <h4 class="bottom10"><a href="javascript:void(0)">Чистый код</a></h4>
                <p>Разработки и внедрения специализированных интеграционных решений</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="javascript:void(0)">SEO оптимизирован</a></h4>
                <p>Наши специалисты успешно оптимизируют и продвигают веб-ресурсы, которое позволит вам получить
                    полностью SEO оптимизированный сайт</p>
            </div>
        </div>
    </div>
</div>

{{-- About us --}}
<section id="our-feature" class="single-feature padding_bottom padding_top_half mt-1 mt-lg-n4 mt-md-n3">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30"> Поднимем ваш<span class="defaultcolor"> бизнес</span> на
                        новый уровень</h2>
                </div>
                <p class="bottom35">Мы команда профессионалов, имеющая ИТ опыт в различных сферах, которая постоянно
                    развивается и соответственно, расширяет спектр предлагаемых услуг. Благодаря глубокому изучению и
                    пониманию потребностей наших клиентов, высокой квалификации специалистов, постоянному
                    совершенствованию своих навыков мы предлагаем свои услуги на профессиональном уровне по оптимальной
                    цене.</p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll mb-sm-0 mb-4">Подробнее</a>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="/images/awesome-feature.png"></div>
            </div>
        </div>
    </div>
</section>

{{-- Work Process --}}
@include('partials.work-process2')

{{-- Mobile Apps --}}
@include('partials.our-apps')

{{-- Statistics --}}
@include('partials.stats')

{{-- Our Team --}}
@include('partials.our-team3')

{{-- Partners --}}
@include('partials.partners3')

{{-- Testimonials --}}
@include('partials.testimonials1')

{{-- Contact us --}}
@include('partials.contact')
@endsection
