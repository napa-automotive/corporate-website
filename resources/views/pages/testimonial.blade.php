@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header testimonial-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Мы ценим</h2>
                    <h2 class="font-bold">Обратная связь с клиентами</h2>
                    <h2 class="font-xlight">В работе</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Отзыв клиента</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item hover-light">Отзыв</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Feedbacks --}}
@include('partials.feedbacks')

{{-- Statistics --}}
@include('partials.stats2')

{{-- Partners --}}
@include('partials.partners2')

{{-- Testimonials --}}
@include('partials.testimonials2')

{{-- Contact us --}}
@include('partials.contact')
@endsection
