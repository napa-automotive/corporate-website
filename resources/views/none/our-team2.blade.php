<section class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading_space animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Наша <span class="font-normal">команда</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-0">Мы молодая, динамично развивающаяся компания, команда профессионалов, имеющая опыт
                        внедрения ИТ услуг во все сферы деятельности организации. </p>
                </div>
            </div>
        </div>
        <div class="row equal-shadow-team">
            <!--item 1-->
            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-4">
                    <div class="team-box wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <img src="{{ $team->image }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="darkcolor">{{ $team->name }}</h4>
                            <p>{{ $team->job }}</p>
                            <ul class="social-icons-simple">
                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>