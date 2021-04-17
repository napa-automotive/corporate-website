{{-- #translate --}}
@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header faq-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">{{ __('Read these') }}</h2>
                    <h2 class="font-bold">{{ __('before asking') }}</h2>
                    <h2 class="font-xlight">{{ __('further questions') }}</h2>
                    <h3 class="font-light pt-2">{{ __('Maybe this is the solution to your problem, the answer is here') }}</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('Frequently asked questions') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Главная') }}</a></li>
                        <li class="breadcrumb-item hover-light">{{ __('FAQ') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section id="ourfaq" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">
                    {{ __('Frequently asked questions') }}
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="heading_space">{{ __('You can find answers to your questions here') }}</p>
                </div>
            </div>

            {{-- Tabs --}}
            <div class="col-md-12 col-sm-12">
                <div id="accordion">
                    {{-- Question 1 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link darkcolor" data-toggle="collapse" href="#collapseOne">
                                {{ __('What are the main objectives of your product / service for its users?') }}
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div>{{ __('Automation of business processes can significantly improve the quality of management in a company and the quality of its product, and for the enterprise as a whole it provides a number of significant advantages') }}:</div>

                                <ul style="padding-left:30px; list-style:disc;">
                                    <li>{{ __('Increasing the speed of information processing and solving repetitive tasks.') }}</li>
                                    <li>{{ __('Increasing the transparency of the business and its technological effectiveness.') }}</li>
                                    <li>{{ __('Increased consistency of staff actions and the quality of their work.') }}</li>
                                    <li>{{ __('The ability to control large amounts of information.') }}</li>
                                    <li>{{ __('Reduced errors and improved control accuracy.') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Question 2 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseTwo">
                                {{ __('Why exactly your consultation?') }}
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Мы команда профессионалов, имеющая ИТ опыт в различных сферах, которая постоянно
                                    развивается и соответственно, расширяет спектр предлагаемых услуг</p>
                            </div>
                        </div>
                    </div>

                    {{-- Question 3 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseThree">
                                {{ __('Describe the target audience of your product / service. Who are your clients?') }}
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Средний малый бизнес, стартапы, крупные корпорации, холдинги и
                                    государственные компании. С другой стороны: современный
                                    молодёжь интересующийся информационными технологиями и
                                    инновациями</p>
                            </div>
                        </div>
                    </div>

                    {{-- Question 4 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse"
                                href="#collapseFour">{{ __('Technologies') }}</a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Мы используем самые современные технологии для
                                    разработки программного обеспечения.
                                    Набор используемых технологий весьма широк, но при этом
                                    он индивидуально подбирается с учетом потребностей
                                    каждого конкретного проекта.
                                    Например, СУБД - классические MS SQL Server, Oracle,
                                    PostgreSQL и достаточно новые -MongoDB и другие,
                                    обеспечивающие надежное хранение и быстрый доступ к
                                    данным.
                                    Для разработки сайтов и приложении - PHP,
                                    Python, .NET и Java и самые современные
                                    технологии Bootstrap и React, VUE, Angular, позволяющие
                                    создавать интернет-приложения, пригодные к работе на любых
                                    видах устройств.
                                    Все это позволяет создавать высоконадежные,
                                    производительные системы, рассчитанные на самый широкой
                                    спектр применения. Используемые технологии организации
                                    производственного процесса позволяют наладить постоянный
                                    ритм производства, снизить стоимость разработки,
                                    автоматически обнаруживать дефекты.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Question 5 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseFive">
                                {{ __('Projects that we have implemented') }}
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <ol style="padding-left:40px;list-style:initial;">
                                    <li>Система управление персоналом и оценка сотрудников методом «Тайный Покупатель» - Веб приложение + Android.</li>
                                    <li>«Fox Media» система управление учебным процессом и видео контентом - Веб приложение + Android. www.foxitmedia.uz</li>
                                    <li>«MyСагеег» - Веб приложение для карьерного центра napa.ioctoedu.com</li>
                                    <li>ERP система для высших учебных на базе коробочного версии системы: erp.complex.uz</li>
                                    <li>Веб сайт для транспортной компании www.alvierologistics.uz</li>
                                    <li>Веб сайт для учебного центра «Ёшлар Илм Маркази» www.complex.uz</li>
                                    <li>Интерактивный веб портал для Академия Генеральной прокуратуры Республики Узбекистан: new.proacademy.uz</li>
                                    <li>Техническое задание для Агентство по развитию рынка капитала Республики Узбекистан на разработку многофункционалного портала: attestation.uzcmda.uz</li>
                                    <li>Техническое задание для Министерство инновационного развития Республики Узбекистан на разработку интерактивного портала</li>
                                    <li>Техническое задание для AO «UzAuto Motors» на производственный процесс, для модуля SCM</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    {{-- Question 6 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseSix">
                                {{ __('Main directions of activity') }}
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div>Мы, молодая и амбициозная стартап команда, позиционируемся на рынке как системный IT интегратор, занимающиеся услугами ниже:</div>

                                <ol style="padding-left:40px;list-style:initial;">
                                    <li>Разработка технического задания на создание автоматизированной системы</li>
                                    <li>Разработка веб приложении</li>
                                    <li>Разработки и внедрения специализированных интеграционных решений</li>
                                    <li>Разработка мобильных приложений iOS/Android</li>
                                    <li>Внедрение комплексных программных и аппаратных IT-систем</li>
                                    <li>Разработка и внедрения автоматизированных систем (BPM, ECM, CRM, ERP)</li>
                                    <li>Техническая поддержка, Аутсорсинг и Аутстаффинг IT услуг</li>
                                    <li>Разработка, внедрение и обслуживание систем «1С»</li>
                                    <li>Система автоматизации торговли</li>
                                </ol>

                                <div style="margin-top:10px;">
                                    Кроме того, мы запустили уникальный проект My Career, это
                                    Центр развития карьеры и содействия трудоустройству
                                    молодёжи.

                                    Центр развития карьеры и содействия трудоустройству
                                    молодёжи является структурным подразделением компании
                                    NAPA Automotive.

                                    Одним из основных показателей качества
                                    подготовки, обучающихся в вузе является востребованность
                                    выпускников после его окончания, а также их карьерная
                                    «траектория».

                                    В целях реализации задач, связанных с
                                    содействием трудоустройству выпускников и оказанием
                                    помощи в профессиональном становлении.

                                    Туринский Политехнический Университет совместно с NAPA Automotive
                                    запустили проект My Career для содействия трудоустройству
                                    выпускников вуза.
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Question 7 --}}
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseSeven">
                                {{ __('Our key strengths') }}    
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div>Мы всегда стремимся в каждом проекте использовать
                                    инноваций подход, как устойчивого конкурентного
                                    преимущества</div>

                                <ul style="padding-left:30px; list-style:disc;">
                                    <li>Мы всегда стремимся на высокий и стабильный уровень обслуживания</li>
                                    <li>Возможность быстрой адаптации к рыночным изменениям</li>
                                    <li>Концентрация всех усилий на достижении максимальной скорости и сокращении времени исполнения услуги</li>
                                    <li>Стратегия низких цен и способность ее удержать, укрепить и развить</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
