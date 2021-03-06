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
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
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
                                <p>???? ?????????????? ????????????????????????????, ?????????????? ???? ???????? ?? ?????????????????? ????????????, ?????????????? ??????????????????
                                    ?????????????????????? ?? ????????????????????????????, ?????????????????? ???????????? ???????????????????????? ??????????</p>
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
                                <p>?????????????? ?????????? ????????????, ????????????????, ?????????????? ????????????????????, ???????????????? ??
                                    ?????????????????????????????? ????????????????. ?? ???????????? ??????????????: ??????????????????????
                                    ???????????????? ???????????????????????????? ?????????????????????????????? ???????????????????????? ??
                                    ??????????????????????</p>
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
                                    ???? ???????????????????? ?????????? ?????????????????????? ???????????????????? ??????
                                    ???????????????????? ???????????????????????? ??????????????????????.
                                    ?????????? ???????????????????????? ???????????????????? ???????????? ??????????, ???? ?????? ????????
                                    ???? ?????????????????????????? ?????????????????????? ?? ???????????? ????????????????????????
                                    ?????????????? ?????????????????????? ??????????????.
                                    ????????????????, ???????? - ???????????????????????? MS SQL Server, Oracle,
                                    PostgreSQL ?? ???????????????????? ?????????? -MongoDB ?? ????????????,
                                    ???????????????????????????? ???????????????? ???????????????? ?? ?????????????? ???????????? ??
                                    ????????????.
                                    ?????? ???????????????????? ???????????? ?? ???????????????????? - PHP,
                                    Python, .NET ?? Java ?? ?????????? ??????????????????????
                                    ???????????????????? Bootstrap ?? React, VUE, Angular, ??????????????????????
                                    ?????????????????? ????????????????-????????????????????, ?????????????????? ?? ???????????? ???? ??????????
                                    ?????????? ??????????????????.
                                    ?????? ?????? ?????????????????? ?????????????????? ????????????????????????????,
                                    ???????????????????????????????? ??????????????, ???????????????????????? ???? ?????????? ??????????????
                                    ???????????? ????????????????????. ???????????????????????? ???????????????????? ??????????????????????
                                    ?????????????????????????????????? ???????????????? ?????????????????? ???????????????? ????????????????????
                                    ???????? ????????????????????????, ?????????????? ?????????????????? ????????????????????,
                                    ?????????????????????????? ???????????????????????? ??????????????.
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
                                    <li>?????????????? ???????????????????? ???????????????????? ?? ???????????? ?????????????????????? ?????????????? ?????????????? ?????????????????????? - ?????? ???????????????????? + Android.</li>
                                    <li>??Fox Media?? ?????????????? ???????????????????? ?????????????? ?????????????????? ?? ?????????? ?????????????????? - ?????? ???????????????????? + Android. www.foxitmedia.uz</li>
                                    <li>??My?????????????? - ?????? ???????????????????? ?????? ???????????????????? ???????????? napa.ioctoedu.com</li>
                                    <li>ERP ?????????????? ?????? ???????????? ?????????????? ???? ???????? ?????????????????????? ???????????? ??????????????: erp.complex.uz</li>
                                    <li>?????? ???????? ?????? ???????????????????????? ???????????????? www.alvierologistics.uz</li>
                                    <li>?????? ???????? ?????? ???????????????? ???????????? ???????????? ?????? ???????????????? www.complex.uz</li>
                                    <li>?????????????????????????? ?????? ???????????? ?????? ???????????????? ?????????????????????? ?????????????????????? ???????????????????? ????????????????????: new.proacademy.uz</li>
                                    <li>?????????????????????? ?????????????? ?????? ?????????????????? ???? ???????????????? ?????????? ???????????????? ???????????????????? ???????????????????? ???? ???????????????????? ?????????????????????????????????????? ??????????????: attestation.uzcmda.uz</li>
                                    <li>?????????????????????? ?????????????? ?????? ???????????????????????? ???????????????????????????? ???????????????? ???????????????????? ???????????????????? ???? ???????????????????? ???????????????????????????? ??????????????</li>
                                    <li>?????????????????????? ?????????????? ?????? AO ??UzAuto Motors?? ???? ???????????????????????????????? ??????????????, ?????? ???????????? SCM</li>
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
                                <div>????, ?????????????? ?? ?????????????????????? ?????????????? ??????????????, ?????????????????????????????? ???? ?????????? ?????? ?????????????????? IT ????????????????????, ???????????????????????? ???????????????? ????????:</div>

                                <ol style="padding-left:40px;list-style:initial;">
                                    <li>???????????????????? ???????????????????????? ?????????????? ???? ???????????????? ???????????????????????????????????? ??????????????</li>
                                    <li>???????????????????? ?????? ????????????????????</li>
                                    <li>???????????????????? ?? ?????????????????? ???????????????????????????????????? ???????????????????????????? ??????????????</li>
                                    <li>???????????????????? ?????????????????? ???????????????????? iOS/Android</li>
                                    <li>?????????????????? ?????????????????????? ?????????????????????? ?? ???????????????????? IT-????????????</li>
                                    <li>???????????????????? ?? ?????????????????? ???????????????????????????????????? ???????????? (BPM, ECM, CRM, ERP)</li>
                                    <li>?????????????????????? ??????????????????, ???????????????????? ?? ?????????????????????? IT ??????????</li>
                                    <li>????????????????????, ?????????????????? ?? ???????????????????????? ???????????? ??1????</li>
                                    <li>?????????????? ?????????????????????????? ????????????????</li>
                                </ol>

                                <div style="margin-top:10px;">
                                    ?????????? ????????, ???? ?????????????????? ???????????????????? ???????????? My Career, ??????
                                    ?????????? ???????????????? ?????????????? ?? ???????????????????? ??????????????????????????????
                                    ????????????????.

                                    ?????????? ???????????????? ?????????????? ?? ???????????????????? ??????????????????????????????
                                    ???????????????? ???????????????? ?????????????????????? ???????????????????????????? ????????????????
                                    NAPA Automotive.

                                    ?????????? ???? ???????????????? ?????????????????????? ????????????????
                                    ????????????????????, ?????????????????????? ?? ???????? ???????????????? ????????????????????????????????
                                    ?????????????????????? ?????????? ?????? ??????????????????, ?? ?????????? ???? ??????????????????
                                    ????????????????????????.

                                    ?? ?????????? ???????????????????? ??????????, ?????????????????? ??
                                    ?????????????????????? ?????????????????????????????? ?????????????????????? ?? ??????????????????
                                    ???????????? ?? ???????????????????????????????? ??????????????????????.

                                    ?????????????????? ?????????????????????????????? ?????????????????????? ?????????????????? ?? NAPA Automotive
                                    ?????????????????? ???????????? My Career ?????? ???????????????????? ??????????????????????????????
                                    ?????????????????????? ????????.
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
                                <div>???? ???????????? ?????????????????? ?? ???????????? ?????????????? ????????????????????????
                                    ?????????????????? ????????????, ?????? ?????????????????????? ??????????????????????????
                                    ????????????????????????</div>

                                <ul style="padding-left:30px; list-style:disc;">
                                    <li>???? ???????????? ?????????????????? ???? ?????????????? ?? ???????????????????? ?????????????? ????????????????????????</li>
                                    <li>?????????????????????? ?????????????? ?????????????????? ?? ???????????????? ????????????????????</li>
                                    <li>???????????????????????? ???????? ???????????? ???? ???????????????????? ???????????????????????? ???????????????? ?? ???????????????????? ?????????????? ???????????????????? ????????????</li>
                                    <li>?????????????????? ???????????? ?????? ?? ?????????????????????? ???? ????????????????, ???????????????? ?? ??????????????</li>
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
