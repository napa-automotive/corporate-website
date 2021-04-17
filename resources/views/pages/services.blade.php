@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header service-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight pt-3">{{ __('Lift up') }}</h2>
                    <h2 class="font-bold">{{ __('your business') }}</h2>
                    <h2 class="font-xlight">{{ __('to a new level') }}</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('Our services') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item hover-light">{{ __('Services') }}</li>
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
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-light">{{ __('Our services') }}</span>
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2">
                <p class="mb-n3">
                    {{ __('We always strive to use an innovation approach in every project as a sustainable competitive advantage.') }}
                </p>
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
                        <div class="services-content text-center text-md-left">
                            <h3 class="bottom10 darkcolor"><a href="#">{{ $service->name }}</a></h3>
                            <p class="bottom15">{{ $service->description }}</p>
                            <a href="#" class="button-readmore">{{ __('More details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Removed comments in /storage/temp/services-list.blade.php --}}
        </div>
    </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
