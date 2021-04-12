@extends('layouts.master')
    @section('content')
        
        <section class="section">
            <div class="swiper-container swiper-slider swiper-slider-modern swiper-slider-2" data-loop="true" data-dragable="false" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="{{ asset('assets/images/Havilla/slider-001.jpg')}}" style="background-position: 80% center">
                        <div class="swiper-slide-caption section-70">
                            <div class="container">
                                <div class="range range-xs-center">
                                    <div class="cell-md-9 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                            <h1 class="text-bold slider-tl">Havilla University</h1>
                                        </div>
                                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp" data-caption-delay="150">
                                            <h6 class="slider-txt"><span data-novi-id="1">At Havilla University, it is our sincere wish to be forerunners in the training of youths that shall be transformed into future leaders and generations of nation builders.</span></h6>
                                        </div>
                                        <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp" data-caption-delay="400">
                                            <div class="group-xl group-middle">
                                                <a class="btn btn-primary" href="{{ route('admissions') }}">Start a Journey</a>
                                                <!-- <a class="btn btn-default" href="#"><span data-novi-id="3">Get Template Now</span></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('assets/images/Havilla/Slider-2.jpg')}}" style="background-position: 80% center">
                        <div class="swiper-slide-caption section-70">
                            <div class="container">
                                <div class="range range-xs-center">
                                    <div class="cell-md-9 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                            <h1 class="text-bold">Creating Your Future</h1>
                                        </div>
                                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp" data-caption-delay="150">
                                            <h6 class="slider-txt"><span data-novi-id="2">At Havilla University, we uphold a philosophy of <strong>Quality</strong>, <strong>Excellence</strong> and <strong>Sound Moral Values</strong> in a bid to produce a generation of nation builders.</span></h6>
                                        </div>
                                        <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp" data-caption-delay="400">
                                            <div class="group-xl group-middle"><a class="btn btn-primary" href="{{ route('about', 'about-us') }}">Know More</a>
                                                <!-- <a class="btn btn-default" href="#">Get Template Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('assets/images/Slider-3.jpg')}}" style="background-position: 80% center">
                        <div class="swiper-slide-caption section-70">
                            <div class="container">
                                <div class="range range-xs-center">
                                    <div class="cell-md-9 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                            <h1 class="text-bold">More Than Just Studying</h1>
                                        </div>
                                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp" data-caption-delay="150">
                                            <h6 class="slider-txt"><span data-novi-id="0">Havilla University is not just a place of study, it's a place where leaders are moulded and brilliant minds are both created and nurtured.</span></h6>
                                        </div>
                                        <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp" data-caption-delay="400">
                                            <div class="group-xl group-middle">
                                                <a class="btn btn-primary" href="{{ route('admissions') }}">Start a Journey</a>
                                                <!-- <a class="btn btn-default" href="#">Get Template Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev fa-arrow-left"></div>
                <div class="swiper-button-next fa-arrow-right"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
   {{--  <section class="section novi-background bg-cover section-70 section-md-114 bg-default carousel-sec">
    <div class="platforms">
    <div class="slide-track">
        <a class="taphover" id="top" href="#" alt="Phriendle">
            <img src="{{ asset('assets/images/Carousel/C3.jpg') }}">
      <h2>Academic Block</h2>
        </a>
        <a class="taphover" id="middle" href="#" alt="Piccial">
            <img src="{{ asset('assets/images/Carousel/C1.jpg') }}">
      <h2>HUNI Entrance</h2>
        </a>
        <a class="taphover" id="top" href="#" alt="Textcial">
            <img src="{{ asset('assets/images/Carousel/C4.jpg') }}">
      <h2>School Cafeteria</h2>
        </a>
        <a class="taphover" id="bottom" href="#" alt="Phaveit">
            <img src="{{ asset('assets/images/Carousel/C7.jpg') }}">
      <h2>Standard Lecture Room</h2>
        </a>
        <a class="taphover" id="middle" href="#" alt="Connectcial">
            <img src="{{ asset('assets/images/Carousel/C5.jpg') }}">
      <h2>Academic Block (Side View)</h2>
        </a>
        <a class="taphover" id="top" href="#" alt="Steyel">
            <img src="{{ asset('assets/images/Carousel/C6.jpg') }}">
      <h2>Admin Block (Interior)</h2>
        </a>
        <a class="taphover" id="middle" href="#" alt="Phreetime">
            <img src="{{ asset('assets/images/Carousel/C8.jpg') }}">
      <h2>School Library</h2>
        </a>
        <a class="taphover" id="bottom" href="#" alt="Noteiphy">
            <img src="{{ asset('assets/images/Carousel/C10.jpg') }}">
            <h2>Excellent Lecturer Room</h2>
        </a>
        <a class="taphover" id="top" href="#" alt="Phindnow">
            <img src="{{ asset('assets/images/Carousel/C9.jpg') }}">
            <h2>VC's Lodge</h2>
        </a>
    </div>
</div>
        </section> --}}
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="container">
            <div id="slide-left-container">
              <div class="slide-left">
              </div>
            </div>
            <div id="cards-container">
              <div class="cards">
                <div class="card">
                    <b class="carousel-title">Academic Block</b>
                  <img src="{{ asset('assets/images/Carousel/C3.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b style="color: black !important;">Academic Block</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">HUNI Enrance Gate</b>
                  <img src="{{ asset('assets/images/Carousel/C1.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>HUNI Enrance Gate</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">School Cafeteria</b>
                  <img src="{{ asset('assets/images/Carousel/C4.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>School Cafeteria</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">Standard Lecture Room</b>
                  <img src="{{ asset('assets/images/Carousel/C7.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>Standard Lecture Room</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">Academic Block (Side View)</b>
                  <img src="{{ asset('assets/images/Carousel/C5.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>Academic Block (Side View)</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">Admin Block (Interior)</b>
                  <img src="{{ asset('assets/images/Carousel/C6.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>Animals</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">School Library</b>
                  <img src="{{ asset('assets/images/Carousel/C8.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>Nature</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">Excellent Lecturer Room</b>
                  <img src="{{ asset('assets/images/Carousel/C10.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>Architecture</b> --}}
                    </h4>
                  </div>
                </div>
                <div class="card">
                    <b class="carousel-title">VC's Lodge</b>
                  <img src="{{ asset('assets/images/Carousel/C9.jpg') }}" alt="HUNI" style="width:100%;">
                  <div class="container">
                    <h4>
                      {{-- <b>VC's Lodge</b> --}}
                    </h4>
                  </div>
                </div>
              </div>
            </div>

            <div id="slide-right-container">
              <div class="slide-right">
              </div>
            </div>

          </div>
        </section>
        {{-- <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell isotope-wrap">
                <h2 class="text-bold">Latest News</h2>
                <hr class="divider bg-madison">
                <div class="row range-30 isotope offset-top-50 text-left">
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item">
                        <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/HR.jpg')}}" alt="" width="370" height="240"></a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item">
                        <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Entrepreneurship.jpg')}}" alt="" width="370" height="240"></a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item">
                        <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Accounting.jpg')}}" alt="" width="370" height="240"></a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item">
                        <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Accounting.jpg')}}" alt="" width="370" height="240"></a>
                        </article>
                    </div>
                </div>
                <div class="offset-top-50"><a class="btn btn-primary" href="#">View All News Posts</a></div>
            </div>
        </section> --}}
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default" style="padding-bottom: 0 !important;">
            <div class="shell">
                <div class="range range-50">
                    <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                        <div class="inset-sm-left-50"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('assets/images/hon.jpg')}}" alt="" width="340" height="300">
                            <div class="offset-top-20">
                                <h6 class="text-primary text-bold" style="font-size: 15.5px;">Hon. (Evang.) Jones A. O. Tangban m.h.r.</h6>
                            </div>
                            <p style="font-weight: bold;"><em>Founder, Havilla University</em></p>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-sm-push-1 text-sm-left">
                        <h2 class="text-bold">About Havilla University</h2>
                        <hr class="divider bg-madison hr-sm-left-0">
                        <div class="offset-top-30 offset-sm-top-30">
                            <p>The desire to establish Havilla University is an attestation to the Proprietor's zeal to affect humanity in the best of ways. His service to humanity is evidenced by the stream of educational institutions already established at Abuja and Akparabong, Ikom. The core values of 'Learning, Integrity and Excellence, have gained profound relevance in the philosophy of the Proprietor, Steadyflow International Limited, as it lays solid foundation for the establishment of a University of international standard. The Proprietor is glad to share the dream to establish Havilla University, which had been conceived to impact the lives of the teeming youths of our country. This has fueled our commitment to contribute our quota to the transformation of our society and the development of our nation, Nigeria.<br>
                            It is our sincere wish to be forerunners in the training of youths that shall be transformed into future leaders and generations of nation builders. This supports the educational focus of the Federal Government of expanding access and improving quality in the Nigerian University System (NUS). The University shall bring a dynamic system of teaching, learning and research in a conducive and encouraging environment, which shall be facilitated by state-of-the-art equipment, facilities and structures to aid in the molding world-class graduates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="vid-area">
            <div class="video-left">
                <video controls class="welcome-video">
                  <source src="{{ asset('assets/vids/welcome2.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="logo-bg">
                <img src="{{ asset('assets/images/Havilla/h_logo.jpeg')}}" width="400" height="400">
            </div>
        </div>
        {{-- <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <video width="1200" height="660" controls class="welcome-vid">
              <source src="{{ asset('assets/vids/welcome2.mp4') }}" type="video/mp4">
            </video>
        </section> --}}

        <section class="section context-dark section-image-aside section-image-aside-left">
            <div class="novi-background bg-cover section-70 section-md-114 bg-madison">
                <div class="shell">
                    <div class="range range-xs-center range-sm-right offset-top-0">
                        <div class="cell-xs-10 cell-sm-7 text-sm-left">
                            <div class="section-image-aside-img bg-cover veil reveal-sm-block" style="background-image: url( {{ asset('assets/images/Havilla//side.jpeg') }})"></div>
                            <div class="section-image-aside-body inset-sm-left-70 inset-lg-left-110">
                                <h2 class="text-bold">Courses we offer</h2>
                                <hr class="divider hr-sm-left-0 bg-white">
                                <div class="offset-top-30 offset-md-top-30 text-light">As prospective standard bearers in the ongoing school to work discuss, these are some of our courses but not limited to:</div>
                                <div class="text-left post-vacation-wrap offset-top-30">
                                    <article class="post-vacation">
                                        <!-- <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(images/course-01-150x120.jpg)"></a> -->
                                        <div class="post-vacation-body">
                                            <div>
                                                <h6 class="post-vacation-title">
                                                    <a href="{{ route('dept', 'computer-science') }}">Cyber Security</a>
                                                </h6>
                                            </div>
                                            <!-- <div class="offset-lg-top-10">
                                                <p>Charles Banks</p>
                                            </div> -->
                                            <div class="post-vacation-meta offset-top-10"><time class="text-dark" datetime="2018-01-01">Faculty of Computing and Sciences</time>
                                                <ul class="list-inline list-unstyled list-inline-primary">
                                                    <!-- <li><a class="icon novi-icon icon-xxs mdi mdi-timer-sand" href="#" data-toggle="tooltip" data-placement="top" title="Full time"></a></li> -->
                                                    <li><a class="icon novi-icon icon-xxs fa fa-graduation-cap" href="#" data-toggle="tooltip" data-placement="top" title="Certified"></a></li>
                                                    <!-- <li><a class="icon novi-icon icon-xxs mdi mdi-laptop-chromebook" href="#" data-toggle="tooltip" data-placement="top" title="Online Course"></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="post-vacation">
                                        <!-- <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(images/course-02-150x120.jpg)"></a> -->
                                        <div class="post-vacation-body">
                                            <div>
                                                <h6 class="post-vacation-title">
                                                    <a href="{{ route('dept', 'biological-science') }}">Biotechnology</a>
                                                </h6>
                                            </div>
                                           <!--  <div class="offset-lg-top-10">
                                                <p>Maria Howard</p>
                                            </div> -->
                                            <div class="post-vacation-meta offset-top-10">
                                                <time class="text-dark" datetime="2018-01-01">Faculty of Computing and Sciences </time>
                                                <ul class="list-inline list-unstyled list-inline-primary">
                                                    <!-- <li><a class="icon novi-icon icon-xxs mdi mdi-battery-50" href="#" data-toggle="tooltip" data-placement="top" title="Facultative"></a></li> -->
                                                    <li><a class="icon novi-icon icon-xxs fa fa-graduation-cap" href="#" data-toggle="tooltip" data-placement="top" title="Certified"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="post-vacation">
                                        <!-- <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(images/course-03-150x120.jpg)"></a> -->
                                        <div class="post-vacation-body">
                                            <div>
                                                <h6 class="post-vacation-title">
                                                    <a href="{{ route('dept', 'physics') }}">Physics with Electronics</a>
                                                </h6>
                                            </div>
                                            <!-- <div class="offset-lg-top-10">
                                                <p>Steven Carter</p>
                                            </div> -->
                                            <div class="post-vacation-meta offset-top-10">
                                                <time class="text-dark" datetime="2018-01-01">Faculty of Computing and Sciences </time>
                                                <ul class="list-inline list-unstyled list-inline-primary">
                                                    <!-- <li><a class="icon novi-icon icon-xxs mdi mdi-battery-50" href="#" data-toggle="tooltip" data-placement="top" title="Facultative"></a></li> -->
                                                    <li><a class="icon novi-icon icon-xxs fa fa-graduation-cap" href="#" data-toggle="tooltip" data-placement="top" title="Certified"></a></li>
                                                    <!-- <li><a class="icon novi-icon icon-xxs mdi mdi-laptop-chromebook" href="#" data-toggle="tooltip" data-placement="top" title="Online Course"></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="offset-top-60"><a class="btn btn-primary" href="{{ route('courses') }}">View All Courses</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br/><br/><br/>
       {{--  <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h2 class="text-bold">Statistics</h2>
                <hr class="divider bg-madison">
                <div class="range range-65 range-xs-center range-md-left offset-top-55 counters">
                    <div class="cell-sm-6 cell-md-3">
                        <div class="counter-type-1"><span class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-school"></span>
                            <div class="h3 text-bold text-primary offset-top-15"><span class="counter">97</span><span class="symbol">%</span></div>
                            <hr class="divider bg-gray-light divider-sm">
                            <div class="offset-top-10">
                                <h6 class="text-black font-accent">Graduates</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <div class="counter-type-1"><span class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-wallet-travel"></span>
                            <div class="h3 text-bold text-primary offset-top-15"><span class="counter">30</span><span class="symbol">+</span></div>
                            <hr class="divider bg-gray-light divider-sm">
                            <div class="offset-top-10">
                                <h6 class="text-black font-accent">Certified Lecturers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <div class="counter-type-1"><span class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-domain"></span>
                            <div class="h3 text-bold text-primary offset-top-15"><span class="counter">8</span><span class="symbol"></span></div>
                            <hr class="divider bg-gray-light divider-sm">
                            <div class="offset-top-10">
                                <h6 class="text-black font-accent">Student Campuses</h6>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <div class="counter-type-1"><span class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"></span>
                            <div class="h3 text-bold text-primary offset-top-15"><span class="counter">6510</span><span class="symbol"></span></div>
                            <hr class="divider bg-gray-light divider-sm">
                            <div class="offset-top-10">
                                <h6 class="text-black font-accent">Students</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell-wide">
                <h2 class="text-bold">Upcoming Events</h2>
                <hr class="divider bg-madison">
                <div class="range range-50 offset-top-50 range-xs-center">
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive" src="{{ asset('assets/images/Havilla/Events.jpg')}}" alt="" width="420" height="420">
                                <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                    <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                                </div>
                                <div class="post-event-meta text-center">
                                    <div class="h3 text-bold reveal-inline-block reveal-lg-block">31</div>
                                    <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a href="event-page.html">Spacewalking Conference</a></h6>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive" src="{{ asset('assets/images/Havilla/Events.jpg')}}" alt="" width="420" height="420">
                                <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                    <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                                </div>
                                <div class="post-event-meta text-center">
                                    <div class="h3 text-bold reveal-inline-block reveal-lg-block">05</div>
                                    <p class="reveal-inline-block reveal-lg-block">May</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a href="event-page.html">International Conference on Biomolecular Engineering</a></h6>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Raymond Salazar</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive" src="{{ asset('assets/images/Havilla/Events.jpg')}}" alt="" width="420" height="420">
                                <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                    <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                                </div>
                                <div class="post-event-meta text-center">
                                    <div class="h3 text-bold reveal-inline-block reveal-lg-block">17</div>
                                    <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a href="event-page.html">Graphic Design Workshop</a></h6>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive" src="{{ asset('assets/images/Havilla/Events.jpg')}}" alt="" width="420" height="420">
                                <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                    <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                                </div>
                                <div class="post-event-meta text-center">
                                    <div class="h3 text-bold reveal-inline-block reveal-lg-block">06</div>
                                    <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                                </div>
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a href="event-page.html">History of Art</a></h6>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Danielle Garza</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="offset-top-50 offset-lg-top-56"><a class="btn btn-icon btn-icon-right btn-primary" href="events.html"><span class="icon fa-arrow-right"></span><span>View Event Calendar</span></a></div>
            </div>
        </section> --}}
        <section class="section novi-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative">
            <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav" data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]">
                <div>
                    <div class="shell">
                        <div class="range range-xs-center range-xs-middle">
                            <div class="cell-sm-9 cell-sm-push-1">
                                <div class="quote-classic-boxed text-center">
                                    <div class="quote-body"><q>Every house is builded by some man but the builder of all things is God - Hebrew 3:4</q>
                                        <div class="offset-top-30 text-center"><cite class="font-accent">Hon. Jones Ayuk Tangban</cite>
                                            <div class="offset-top-5">
                                                <p class="text-dark text-italic">Founder, Havilla University</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div>
                    <div class="shell">
                        <div class="range range-xs-center range-xs-middle">
                            <div class="cell-sm-9 cell-sm-push-1">
                                <div class="quote-classic-boxed text-center">
                                    <div class="quote-body"><q>When I researched the programmes available I realized that the University was offering exactly the type of programme in international development that interested me.</q>
                                        <div class="offset-top-30 text-center"><cite class="font-accent">Steven Tolu</cite>
                                            <div class="offset-top-5">
                                                <p class="text-dark text-italic">Status..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell isotope-wrap">
                <h2 class="text-bold">Latest News</h2>
                <hr class="divider bg-madison">
                <div class="row range-30 isotope offset-top-50 text-left">
                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                        <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/HR.jpg')}}" alt="" width="370" height="240"></a>
                            <div class="post-news-body">
                                <h6><a>Havilla University partners with University of Calabar to develop strategic plans for approved courses.</a></h6>
                                {{-- <div class="offset-top-20">
                                    <p>Securing scholarships can be stressful, but parents and counselors can serve as a resource.</p>
                                </div> --}}
                                <div class="post-news-meta offset-top-20">
                                    {{-- <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                    <span class="text-middle inset-left-10 text-italic text-black">2 days ago</span> --}}
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                        <article class="post-news"><a><img class="img-responsive" src="{{ asset('assets/images/cert.jpeg')}}" alt="" width="370" height="240"></a>
                            <div class="post-news-body">
                                <h6><a>Hon. Jones Tangban receives the license for Havilla University from NUC on April  8th 2021, at Abuja</a></h6>
                                {{-- <div class="offset-top-20">
                                    <p>Summer preparatory programs offered through schools allow students to..</p>
                                </div> --}}
                                <div class="post-news-meta offset-top-20">
                                    {{-- <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                    <span class="text-middle inset-left-10 text-italic text-black">2 days ago</span> --}}
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                        <article class="post-news"><a><img class="" src="{{ asset('assets/images/unical.jpg') }}" alt="" width="370" height="240"></a>
                            <div class="post-news-body">
                                <h6><a>The National Universities Commission has appointed University of Calabar as a mentoring University for Havilla University</a></h6>
                                {{-- <div class="offset-top-20">
                                    <p>International students increasingly want to come to the United States for college or graduate school.</p>
                                </div> --}}
                                <div class="post-news-meta offset-top-20">
                                    {{-- <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                    <span class="text-middle inset-left-10 text-italic text-black">2 days ago</span> --}}
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="offset-top-50"><a class="btn btn-primary" href="{{ route('news') }}">View All News Posts</a></div>
            </div>
        </section>
@endsection