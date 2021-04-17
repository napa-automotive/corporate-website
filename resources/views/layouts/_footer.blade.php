<footer id="site-footer" class="bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="/" class="footer_logo bottom25">
                        <img src="/images/logo.png" alt="trax">
                    </a>
                    <p class="whitecolor bottom25">{{ __('A tailor-made solution for your digital needs') }}</p>

                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            <a class="d-block" href="tel:+998977500004">+998 97 750-00-04</a>
                            <a class="d-block" href="mailto:info@napaautomotive.com">info@napaautomotive.com</a>
                        </p>
                    </div>

                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="https://facebook.com/NapaAutomotive"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://youtube.com/channel/UC8Q8q_I258NsrU3jq_6MzmQ"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://instagram.com/napa_automotive"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">{{ __('Our services') }}</h3>
                    <ul class="links">
                        <li><a href="{{ route('services') }}">{{ __('Company') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                        <li><a href="{{ route('news') }}">{{ __('News') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('Contacts') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">{{ __('Opening hours') }}</h3>
                    <ul class="hours_links whitecolor">
                        <li><span>{{ __('Mon-Sat:') }}</span><span>09:00 - 18:00</span></li>
                        <li><span>{{ __('Friday:') }}</span><span>09:00 - 21:00</span></li>
                        <li><span>{{ __('Sunday:') }}</span><span>09:00 - 20:00</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>