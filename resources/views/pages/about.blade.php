@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">{{ __('The first system') }}</h2>
                    <h2 class="font-bold">{{ __('IT integrator') }}</h2>
                    <h2 class="font-xlight">Napa Automotive</h2>
                    <h3 class="font-light pt-2">{{ __('National Association for Process Automation') }}</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('About our company') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light">
                            <a href="/">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item hover-light">{{ __('About') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About us --}}
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
                    {!! __('Let\'s take :html_start your business :html_end to the next level', [
                        'html_start' => '<span class="defaultcolor">',
                        'html_end' => '</span>'
                    ]) !!}
                </h2>
                <p class="bottom35">
                    {{ __('We are a team of professionals with IT experience in various fields, which is constantly developing and, accordingly, expanding the range of services offered.') }}
                    {{ __('Thanks to in-depth study and understanding of the needs of our clients, high qualifications of specialists, continuous improvement of our skills, we offer our services at a professional level at an optimal price.') }}
                </p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll">{{ __('More details') }}</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 padding_top_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">
                    {!! __('The best skill set available at :html_start our company :html_end', [
                        'html_start' => '<span class="defaultcolor">',
                        'html_end' => '</span>'
                    ]) !!}
                </h2>
                <p class="bottom35">
                    {{ __('For the development of sites and applications - PHP, Python, .NET and Java and the most modern technologies Bootstrap and React, Vue, Angular, allowing you to create Internet applications suitable for work on any type of device.') }}
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
                        <p>PHP / Laravel</p>
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

{{-- Work Process --}}
@include('partials.work-process')

{{-- Our Team --}}
@include('partials.our-team')

{{-- Partners --}}
@include('partials.partners')

{{-- Contact us --}}
@include('partials.contact')
@endsection
