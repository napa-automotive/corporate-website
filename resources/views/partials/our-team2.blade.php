<section class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading_space animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">{{ __('Our team') }}</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-0">
                        {{ __('We are a young, dynamically developing company, a team of professionals with experience in the implementation of IT services in all areas of the organization.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row equal-shadow-team">
            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-4">
                    <div class="team-box wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <img src="{{ $team->image }}" alt="{{ $team->name }}">
                        </div>
                        <div class="team-content">
                            <h4 class="darkcolor">{{ $team->name }}</h4>
                            <p>{{ $team->job }}</p>
                            <ul class="social-icons-simple">
                                <li><a class="facebook" href="{{ $team->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="{{ $team->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="insta" href="{{ $team->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>