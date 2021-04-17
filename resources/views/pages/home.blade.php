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
                <h4 class="bottom10 text-nowrap"><a href="#">{{ __('Well documented') }}</a></h4>
                <p>{{ __('We create safe, well-documented and reliable code for your website') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-laptop"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Fully responsive') }}</a></h4>
                <p>{{ __('Thanks to the well-coordinated work of our specialists, you will receive a cross-platform website fully responsive to all devices.') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Full support') }}</a></h4>
                <p>{{ __('Technical support, outsourcing and outstaffing of IT services') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-edit"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Clean code') }}</a></h4>
                <p>{{ __('Development and implementation of specialized integration solutions') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('SEO optimized') }}</a></h4>
                <p>{{ __('Our experts successfully optimize and promote web resources, which will allow you to get a fully SEO optimized website.') }}</p>
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
                    <h2 class="darkcolor font-normal bottom30">
                        {!! __('Let\'s take :html_start your business :html_end to the next level', [
                            'html_start' => '<span class="defaultcolor">',
                            'html_end' => '</span>'
                        ]) !!}
                </div>
                <p class="bottom35">
                    {{ __('We are a team of professionals with IT experience in various fields, which is constantly developing and, accordingly, expanding the range of services offered.') }}
                    {{ __('Thanks to in-depth study and understanding of the needs of our clients, high qualifications of specialists, continuous improvement of our skills, we offer our services at a professional level at an optimal price.') }}
                </p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll mb-sm-0 mb-4">{{ __('More details') }}</a>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="/images/awesome-feature.png"></div>
            </div>
        </div>
    </div>
</section>

{{-- Work Process --}}
@include('partials.work-process')

{{-- Mobile Apps --}}
@include('partials.our-apps')

{{-- Statistics --}}
@include('partials.stats')

{{-- Our Team --}}
@include('partials.our-team3')

{{-- Partners --}}
@include('partials.partners')

{{-- Testimonials --}}
@include('partials.thoughts')

{{-- Contact us --}}
@include('partials.contact')
@endsection
