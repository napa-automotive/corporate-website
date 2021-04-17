<header class="site-header">
   <nav class="navbar navbar-expand-lg padding-nav static-nav">
      <div class="container">
         <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="logo">
         </a>
         <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-auto">
               <li class="nav-item dropdown position-relative">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false"> Компания </a>
                  <ul class="dropdown-menu megamenu">
                     <li>
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-6 col-md-9 col-sm-12">
                                 <a class="dropdown-item" href="/">Главная</a>
                                 <a class="dropdown-item active" href="{{ route('about') }}">О Нас</a>
                                 <a class="dropdown-item" href="#">Новости</a>
                                 <a class="dropdown-item" href="{{ route('team') }}">Наша команда</a>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="nav-item dropdown position-relative">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">Услуги </a>
                  <ul class="dropdown-menu megamenu">
                     <li>
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-6 col-md-9 col-sm-12">
                                 <a class="dropdown-item" href="{{ route('services') }}">Услуги</a>
                                 <a class="dropdown-item" href="{{ route('faq') }}">FAQ's</a>
                                 <a class="dropdown-item" href="{{ route('testimonial') }}">Отзывы</a>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  position-relative">
                  <a class="nav-link" href="{{ route('project') }}" aria-haspopup="true" aria-expanded="false"> Проекты </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
               </li>

            </ul>
         </div>
         <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
            <li><a href="https://www.facebook.com/NapaAutomotive"><i class="fab fa-facebook-f"></i> </a> </li>
            <li><a href="https://www.instagram.com/napa_automotive/?hl=ru"><i class="fab fa-instagram"></i> </a> </li>
            <li><a href="https://youtube.com/channel/UC8Q8q_I258NsrU3jq_6MzmQ"><i class="fab fa-youtube"></i> </a> </li>
         </ul>
      </div>
   </nav>
</header>