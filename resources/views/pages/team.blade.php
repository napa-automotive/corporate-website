@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header team-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-8    z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Познакомьтесь</h2>
                    <h2 class="font-bold">с нашей лучшей </h2>
                    <h2 class="font-xlight">ведущей командой</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Наша команда</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item hover-light">Наша команда</li>
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
