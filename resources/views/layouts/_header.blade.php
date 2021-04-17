<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo-transparent.png') }}" alt="logo" class="logo-default">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> {{ __('Company') }} </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <a class="dropdown-item" href="{{ route('home') }}">{{ __('Home') }}</a>
                                            <a class="dropdown-item" href="{{ route('about') }}">{{ __('About') }}</a>
                                            <a class="dropdown-item" href="{{ route('news') }}">{{ __('News') }}</a>
                                            <a class="dropdown-item" href="{{ route('team') }}">{{ __('Our Team') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> {{ __('Services') }} </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <a class="dropdown-item" href="{{ route('services') }}">{{ __('Services') }}</a>
                                            <a class="dropdown-item" href="{{ route('faq')}}">{{ __('FAQs') }}</a>
                                            <a class="dropdown-item" href="{{ route('testimonial') }}">{{ __('Testimonials') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  position-relative">
                        <a class="nav-link" href="{{ route('project') }}"> {{ __('Projects') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('Contacts') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>