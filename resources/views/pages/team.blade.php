@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header team-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">{{ __('Meet') }}</h2>
                    <h2 class="font-bold">{{ __('with our best') }}</h2>
                    <h2 class="font-xlight">{{ __('lead team') }}</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('Our team') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item hover-light">{{ __('Our team') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team members --}}
@include('partials.our-team2')

{{-- Statistics --}}
@include('partials.stats')

{{-- Our residents --}}
@include('partials.our-residents')

{{-- Contact us --}}
@include('partials.contact')
@endsection
