@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/parallax-03.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">About Havilla University</h2>
                    {{-- <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-50 text-sm-left range-sm-middle range-sm-justify">
                    <div class="cell-sm-5 cell-md-4 cell-sm-push-2"><a href="/"><img class="img-responsive reveal-inline-block" src="{{ asset('assets/images/events-04-420x420.jpg') }}" alt=""></a></div>
                    <div class="cell-sm-7 cell-md-7 cell-sm-push-1">
                        <h3 class="text-bold">A Few Words <br class="veil reveal-lg-inline-block"> About the University</h3>
                        <hr class="divider bg-madison hr-sm-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            <p>The motive of the Proprietor of Havilla University is to join the league of education providers at the       University level so as to expand access for the ever growing population of Nigerians seeking University admission. This is in response to the call of the Federal Government of Nigeria for private participation in the provision of University education.<br>
                            The good intentions of the Proprietor of the proposed University and the successes recorded in the provision of education at the nursery, primary, secondary, and tertiary levels has fueled the drive of the Proprietor to embark on this laudable project. Thus, the drive for the establishment of the proposed Havilla University as a centre of academic excellence has a solid background.
                            </p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-icon btn-icon-right btn-default" href="{{ route('history') }}"><span class="icon fa-arrow-right"></span><span>Learn More</span></a></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section novi-background bg-cover bg-gray-darkest context-dark">
            <div class="bg-vide novi-vide" data-vide-bg="video/bg-video-1-lg" data-vide-options="posterType: jpg">
                <div class="bg-vide-content section-100 section-md-160">
                    <div class="shell">
                        <h2 class="text-bold">Trusted by Over 1000+ Students</h2>
                        <div class="offset-top-30">
                            <p>Join our community of students around the world helping you succeed.</p>
                        </div>
                        <div class="offset-top-35 offset-lg-top-70"><a class="btn btn-primary" href="#">Get Started</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h2 class="text-bold">Our Skills</h2>
                <hr class="divider bg-madison">
                <div class="range range-50 range-xs-center offset-top-50 text-center">
                    <div class="cell-sm-6 cell-md-3">
                        <!-- Circle Progress bar-circle-->
                        <div class="progress-bar-circle progress-bar-modern" data-value="1" data-gradient="#b80924" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
                        <div class="offset-top-20">
                            <h6 class="text-bold">Accounting</h6>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <!-- Circle Progress bar-circle-->
                        <div class="progress-bar-circle progress-bar-modern" data-value="0.5" data-gradient="#b80924" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
                        <div class="offset-top-20">
                            <h6 class="text-bold">Mathematics</h6>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <!-- Circle Progress bar-circle-->
                        <div class="progress-bar-circle progress-bar-modern" data-value="0.25" data-gradient="#b80924" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
                        <div class="offset-top-20">
                            <h6 class="text-bold">Physics</h6>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <!-- Circle Progress bar-circle-->
                        <div class="progress-bar-circle progress-bar-modern" data-value="0.75" data-gradient="#b80924" data-thickness="10" data-empty-fill="#e5e5e5" data-size="130"><span></span></div>
                        <div class="offset-top-20">
                            <h6 class="text-bold">Computer Science</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative">
            <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav" data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]">
                <div>
                    <div class="shell">
                        <div class="range range-xs-center range-xs-middle">
                            <div class="cell-sm-9 cell-sm-push-1">
                                <div class="quote-classic-boxed text-center">
                                    <div class="quote-body"><q>When you work full-time while studying, you need to sacrifice personal time, which meant that I took my studies seriously. My ambition was not only to complete my degree successfully but to make the best out of the time spent studying.</q>
                                        <div class="offset-top-30 text-center"><cite class="font-accent">Desmond Ike</cite>
                                            <div class="offset-top-5">
                                                <p class="text-dark text-italic">Status..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="shell">
                        <div class="range range-xs-center range-xs-middle">
                            <div class="cell-sm-9 cell-sm-push-1">
                                <div class="quote-classic-boxed text-center">
                                    <div class="quote-body"><q>When I researched the programmes available I realized that the University was offering exactly the type of programme in international development that interested me.</q>
                                        <div class="offset-top-30 text-center"><cite class="font-accent">Blessing Otu</cite>
                                            <div class="offset-top-5">
                                                <p class="text-dark text-italic">Status..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection