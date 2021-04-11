@extends('front.layout')
@section('main')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header faq-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Прочтите эти</h2>
                    <h2 class="font-bold">Прежде чем спрашивать </h2>
                    <h2 class="font-xlight">больше Вопрос</h2>
                    <h3 class="font-light pt-2">Возможно, это решение вашей проблемы, ответ здесь</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Часто задаваемые вопросы</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.html">Главная</a></li>
                        <li class="breadcrumb-item hover-light">ЧЗВ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Faq -->
<section id="ourfaq" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Часто задаваемые <span class="font-normal">вопросы</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="heading_space">Вы можете найти ответы на свои вопросы здесь</p>
                </div>
            </div>
            <h2 class="d-none">Tabs</h2>
            <div class="col-md-12 col-sm-12">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link darkcolor" data-toggle="collapse" href="#collapseOne">Какие основных задачи решает ваш продукт/услуга для своих пользователей?</a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <p class="bottom20">Автоматизация бизнес-процессов может существенно
                                                    повысить качество управления в компании и качество ее
                                                    продукта и для предприятия в целом она дает ряд
                                                    существенных преимуществ:<br>
                                                    • Увеличение скорости обработки информации и
                                                    решения повторяющихся задач.<br>
                                                    • Повышение прозрачности бизнеса и его технологичности.<br>
                                                    • Рост согласованности действий персонала и качества
                                                    его работы.<br>
                                                    • Возможность контроля больших объемов информации.<br>
                                                    •Уменьшение количества ошибок и повышение точности
                                                    управления.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseTwo">Почему именно ваша консультация?</a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Мы команда профессионалов, имеющая ИТ опыт в различных сферах, которая постоянно развивается и соответственно, расширяет спектр предлагаемых услуг</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseThree">Опишите целевую аудиторию вашего продукта/услуги Кто ваши клиенты?</a>
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
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseFour">Технологии </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Мы используем самые современные технологии для
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
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseFive">Проекты которые мы реализовали:</a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>1. Система управление персоналом и оценка сотрудников
                                    методом “Тайный Покупател. - Веб приложение + Android.<br>
                                    2. “Fox Media” система управление учебным процессом и
                                    видео контентом - Веб приложение + Android. http://
                                    demo.foxitmedia.uz/<br>
                                    3. «MyСагеег» - Веб приложение для карьерного центра
                                    http://napa.ioctoedu.com/<br>
                                    4. ERP система для высших учебных на базе коробочного
                                    версии системы http://erp.complex.uz<br>
                                    5. Веб сайт для транспортной компании http://
                                    alvierologistics.uz/<br>
                                    6. Веб сайт для учебного центра “Ёшлар Илм Маркази
                                    www.complex.uz<br>
                                    7. Интерактивный веб портал для Академия Генеральной
                                    прокуратуры Республики Узбекистан https://
                                    new.proacademy.uz/ru#<br>
                                    8. Техническое задание для Агентство по развитию рынка
                                    капитала Республики Узбекистан на разработку
                                    многофункционалного портала<br>
                                    9. Техническое задание для Министерство инновационного
                                    развития Республики Узбекистан на разработку
                                    интерактивного портала<br>
                                    10. Техническое задание для AO “UzAuto Motors” на
                                    производственный процесс, для модуля SCM </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseSix">Oсновные направления деятельности </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Мы, молодая и амбициозная стартап команда,
                                    позиционируемся на рынке как системный IT интегратор,
                                    занимающиеся услугами ниже:
                                    1. Разработка ТЗ(Технического задания) для
                                    автоматизированных систем<br>
                                    2. Разработка веб приложении<br>
                                    3. Разработки и
                                    внедрения специализированных интеграционных
                                    решений<br>
                                    4. Разработка мобильных приложений OS/Android<br>
                                    5. Внедрение комплексных программных и аппаратных IT-
                                    систем<br>
                                    6. Разработка и внедрения автоматизированных систем
                                    (BPM, ECM, CRM, ERP)<br>
                                    7. Техническая поддержка, Аутсорсинг и Аутстаффинг IT
                                    услуг<br>
                                    Кроме того, мы запустили уникальный проект My Career, это
                                    Центр развития карьеры и содействия трудоустройству
                                    молодёжи.
                                    Центр развития карьеры и содействия трудоустройству
                                    молодёжи является структурным подразделением компании
                                    NAPA Automotive. Одним из основных показателей качества
                                    подготовки, обучающихся в вузе является востребованность
                                    выпускников после его окончания, а также их карьерная
                                    «траектория». В целях реализации задач, связанных с
                                    содействием трудоустройству выпускников и оказанием
                                    помощи в профессиональном становлении. Туринский
                                    Политехнический Университет совместно с NAPA Automotive
                                    запустили проект My Career для содействия трудоустройству
                                    выпускников вуза. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseSeven">Наши ключевые преимущества:</a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Мы всегда стремимся в каждом проекте использовать
                                    инноваций подход, как устойчивого конкурентного
                                    преимущества
                                    • Мы всегда стремимся на высокий и
                                    стабильный уровень обслуживания<br>
                                    • Возможность быстрой адаптации к рыночным изменениям<br>
                                    • Концентрация всех усилий на достижении максимальной
                                    скорости и сокращении времени исполнения услуги<br>
                                    • Стратегия низких цен и способность ее удержать, укрепить и
                                    развить </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq ends -->
<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative ">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Оставайтесь на связи</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="ФИО" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Компания"  id="companyName" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">Oтправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
@endsection
