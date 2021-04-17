<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="darkcolor font-normal bottom30 text-center text-md-left">Наша команда</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">
                    Мы молодая, динамично развивающаяся компания, команда профессионалов,
                    имеющая опыт внедрения ИТ услуг во все сферы деятельности организации.
                </p>
            </div>
        </div>

        <div class="ourteam-slider owl-carousel">
            @foreach ($teams as $team)
                <div class="item">
                    <div class="team-box">
                        <div class="image">
                            <img src="{{ $team->image }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="darkcolor">{{ $team->name }}</h4>
                            <p>{{ $team->job }} </p>
                            <ul class="social-icons-simple">
                                <li><a class="facebook" href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="insta" href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>