@extends('layouts.master')
    @section('content')

        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Dept/Faculties/Headers/computing-h.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">{{ $faculty }}</h2>
                    <!-- <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-90 section-md-114 bg-default">
            <div class="shell">
                <div class="responsive-tabs responsive-tabs-classic vertical" data-type="vertical">
                    <div class="resp-tabs-container text-sm-left tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                        <div style="padding-bottom: 20px;">
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Faculty Overview</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>The Faculty of Computing and Sciences in Havilla University aspires to provide students with a welcoming atmosphere in which to pursue their studies, enabling them to fulfill their full potential.</p>
                                    <p>Our students are pioneering, inventive, and imaginative, to name a few adjectives.</p>
                                </div>
                                <h3 class="text-bold veil reveal-lg-block">Departments</h3>
                                <div class="offset-top-30">
                                    <p><span class="fa fa-arrow-right"></span> 
                                        <a href="{{ route('dept', 'computer-science') }}">Computer Science</a>
                                    </p><br>
                                    <p><span class="fa fa-arrow-right"></span> 
                                        <a href="{{ route('dept', 'biological-science') }}">Biological Science</a>
                                        {{-- <a href="{{ route('dept', 'software-engineering') }}">Software Engineering</a> --}}
                                    </p><br>
                                    <p><span class="fa fa-arrow-right"></span> 
                                        <a href="{{ route('dept', 'chemical-sciences') }}">Chemical Sciences</a>
                                    </p><br>
                                    <p><span class="fa fa-arrow-right"></span> 
                                        <a href="{{ route('dept', 'physics') }}">Physics</a>
                                    </p>
                                </div>
                            </div>
                                <a class="btn btn-default apply-btn" href="{{ route('apply') }}"><span data-novi-id="3">Apply Today</span></a> 
                                <a class="btn btn-default apply-btn" href="{{ route('fees') }}"><span data-novi-id="3">Fees Schedule</span></a>
                        </div>
                    </div>
                    <ul class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                        {{-- <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-0" role="tab">Overview</li> --}}
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-3" role="tab">
                          <div>
                            <img src="{{ asset('assets/images/faculty-side.jpg') }}"><br>
                          </div>
                        </li>
                        {{-- <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-4" role="tab">Summer Session</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-5" role="tab">Non-Degree Offerings</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-6" role="tab">Online Learning</li> --}}
                    </ul>
                </div>
            </div>
        </section>

        @endsection