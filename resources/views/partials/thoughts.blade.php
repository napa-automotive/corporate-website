<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <h2 class="whitecolor font-normal">{{ __('What people say') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            {{-- Thought 1 --}}
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="/images/testimonial-1a.jpg" alt="testimonial">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#">Umid Abdusattorov</a></h4>
                        <p>Napa, Tashkent</p>
                    </div>

                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">
                            {{ __('Currently, we are implementing partners of the state enterprise «UzAvtosanoat» on the project «Automation of Business Processes»') }}
                        </p>
                        <span class="d-inline-block test-star">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>

            {{-- Thought 2 --}}
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="/images/testimonial-3a.jpg" alt="testimonial">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#">Sayidazim Mahmudov</a></h4>
                        <p>Backend developer, Tashkent</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">
                            {{ __('We use the most modern technologies for software development.') }}
                        </p>
                        <span class="d-inline-block test-star">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>