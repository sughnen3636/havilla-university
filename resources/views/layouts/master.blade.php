<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <title>{{ $title??'Welcome to Havilla University' }}</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="private university, university, higher education, quality education, world class university">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/Havilla/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/novi.css')}}">
    <link href="{{ asset('assets/font-awesome-5/css/all.min.css')}}" rel="stylesheet">
</head>

<body style="color: black !important;">
    <div class="page-loader">
        <div class="page-loader-body"><span class="cssload-loader"><span class="cssload-loader-inner"></span></span></div>
    </div>
    <div class="page text-center">
        <header class="page-head">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar novi-background rd-navbar-center" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="220px" data-xl-stick-up-offset="220px" data-xxl-stick-up-offset="220px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel"><button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <h4 class="panel-title" style="font-weight: bold; font-size: 22px !important;">HUNI</h4><button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                            <div class="rd-navbar-top-panel">
                                <div class="shell">
                                    <div class="range range-10 range-md-center range-md-middle range-lg-around">
                                        <div class="cell-md-3">
                                            <div class="unit unit-horizontal unit-top unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-phone text-middle"></span></div>
                                                <div class="unit-body"><a class="text-dark" href="tel:2349060381917">+2349060381917</a><br><a href="tel:2348149514281">+2348149514281</a></div>
                                            </div>
                                        </div>
                                        <div class="cell-md-3 text-center">
                                            <div class="rd-navbar-brand"><a class="reveal-inline-block" href="/"><img src="{{ asset('assets/images/Havilla/h_logo.jpeg')}}" alt="" width="191" height="80"></a></div>
                                        </div>
                                        <div class="cell-md-3">
                                            <div class="inset-md-left-50">
                                                <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                                                    <div class="unit-left"><span class="icon novi-icon mdi mdi-map-marker text-middle"></span></div>
                                                    <div class="unit-body">Havilla University, Nde-Ikom, Cross River State, Nigeria</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap clearfix">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <div class="rd-navbar-mobile-header-wrap">
                                        <div class="rd-navbar-mobile-brand"><a href="/"><img src="{{ asset('assets/images/Havilla/h_logo.jpeg')}}" alt="" srcset="{{ asset('assets/images/logo-default-2-144x122-1.png 2x')}}"></a></div>
                                    </div>
                                    <ul class="rd-navbar-nav">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">Admissions</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="{{ route('admissions') }}">Undergraduate</a></li>
                                                {{-- <li><a href="{{ route('admissions', 'under-graduate') }}">Postgraduate</a></li> --}}
                                                <!-- <li><a href="404.html">404</a></li> -->
                                                <!-- <li><a href="privacy.html">Terms of Use</a></li> -->
                                                <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                                                <!-- <li><a href="search-results.html">Search Results</a></li> -->
                                                <!-- <li><a href="team-member-profile.html">Team Member Profile</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about', 'about-us') }}">About HUNI</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="{{ route('history', 'our-history') }}">Our History</a></li>
                                                <li><a href="{{ route('about', 'our-mission') }}">Our Mission</a></li>
                                                <li><a href="{{ route('about', 'our-vision') }}">Our Vision</a></li>
                                                <li><a href="{{ route('about', 'our-core-values') }}">Our Core Values</a></li>
                                                <li><a href="{{ route('about', 'our-philosophy') }}">Our Philosophy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Faculty</a>
                                            <ul class="rd-navbar-dropdown" style="width: 350px;">
                                                <li><a href="{{ route('courses') }}">Faculties</a></li>
                                                <li><a href="{{ route('dap') }}">Director of Academic Planning</a></li>
                                                <li><a href="{{ route('bot') }}">Board of Trustees</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li><a href="events.html">Events</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="event-page.html">Event Details Page</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="#">More</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="team.html">Lecturers</a></li>
                                                <li><a href="gallery.html">School Gallery</a></li>
                                                <!-- <li><a href="404.html">404</a></li> -->
                                                <li><a href="privacy.html">Terms of Use</a></li>
                                                <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                                                <!-- <li><a href="search-results.html">Search Results</a></li> -->
                                                <!-- <li><a href="team-member-profile.html">Team Member Profile</a></li> -->
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ route('news') }}">News</a>
                                            <!-- <ul class="rd-navbar-dropdown">
                                                <li><a href="grid-news.html">Grid News</a></li>
                                                <li><a href="news-post-page.html">News Post Page</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a class="login-nav" href="{{ route('login') }}">Login</a></li>
                                    </ul>
                                    {{-- <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                                            <div class="form-group"><label class="form-label" for="rd-navbar-mobile-search-form-control">Search...</label><input class="rd-navbar-search-form-control form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-control" type="text" name="s" autocomplete="off"></div><button class="icon fa-search rd-navbar-search-button" type="submit"></button>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                                <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-group"><label class="form-label" for="rd-navbar-search-form-control">Search</label><input class="rd-navbar-search-form-control form-control form-control-gray-lightest" id="rd-navbar-search-form-control" type="text" name="s" autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')  

        <footer class="section page-footer">
            <div class="novi-background bg-cover bg-default">
                <div class="shell-wide">
                    <div class="hr bg-gray-light"></div>
                </div>
                <div class="section-60">
                    <div class="shell">
                        <div class="range range-50 range-lg-justify range-xs-center">
                            <div class="cell-md-3 cell-lg-3"><a class="reveal-inline-block" href="/"><img src="{{ asset('assets/images/Havilla/h_logo.png')}}" alt="" srcset="{{ asset('assets/images/Havilla/h_logo.jpeg') }}" width="191" height="180"></a>
                                <div class="offset-top-30 text-center">
                                    <ul class="list-inline list-inline-xs list-inline-madison">
                                        <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
                                <h6 class="text-bold">Contact us</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30">
                                    <ul class="list-unstyled contact-info list">
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a class="text-dark" href="tel:2349060381917">+2349060381917</a><br><a class="reveal-block reveal-md-inline-block text-dark" href="tel:2348149514281">+2348149514281</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body text-left"><a class="text-dark" href="#">Havilla University, Nde-Ikom, Cross River State, Nigeria</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a href="mailto:#">info@havilla.edu.ng</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left">
                                <h6 class="text-bold">Newsletter</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30 text-left">
                                    <span class="alert alert-success subscribed hide" id="sub-alert">Thanks for subscribing to our newsletter</span>
                                    <p>Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
                                </div>
                                <div class="offset-top-10">
                                    <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{ route('newsletter') }}" id="newsletter-frm">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm"><label class="form-label" for="form-email">Your e-mail</label><input class="form-control sub-email" id="form-email" type="email" name="email" data-constraints="@Required @Email">
                                            <span class="input-group-btn"><button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span></div>
                                        </div>
                                        <div class="form-output"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="section-5 bg-madison context-dark novi-background">
                    <div class="shell text-md-left">
                        <p class="">© <span class="copyright-year">2021</span> All Rights Reserved | <span> Designed &nbsp;by Wingphix D.C.</span></p>
                    </div>
                </div> --}}
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/js/core.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>        