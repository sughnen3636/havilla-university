@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/Slider-2.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Our Faculties</h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Course</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill" style="padding-top: 60px;">
            <div class="shell isotope-wrap">
                {{-- <h2 class="text-bold"></h2>
                <hr class="divider bg-madison"> --}}
                <div class="row range-30 isotope offset-top-60 text-left">
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-course"><a href=""><img class="img-responsive" src="{{ asset('assets/images/Dept/Faculties/computing.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6>Computing & Sciences</h6>
                                {{-- <div class="post_meta">
                                    <ul>
                                        <li><p>B.Sc. Biotechnology</p></li>
                                    </ul>
                                </div> --}}
                                <!-- <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div> -->
                                <div class="post-course-meta offset-top-20"><a style="color: #d68612;" href="{{ route('faculty', 'computing-and-scienes') }}">See More</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-news"><a href=""><img class="img-responsive" src="{{ asset('assets/images/Dept/Faculties/mgt.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6>Management & Social Science</h6>
                                {{-- <div class="post_meta">
                                    <ul>
                                        <li>
                                            <p>B.Sc. Industrial Chemistry </p>
                                        </li>
                                    </ul>
                                </div> --}}
                                <!-- <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div> -->
                                <div class="post-course-meta offset-top-20"><a style="color: #d68612;" href="{{ route('faculty', 'management-and-social-sciences') }}">See More</a></div>
                            </div>
                        </article>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                        <article class="post-news"><a href=""><img class="img-responsive" src="{{ asset('assets/images/Dept/Faculties/natural.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6>Natural & Applied Sciences</h6>
                                <div class="post_meta">
                                    <ul>
                                        <li>
                                            <p>B.Sc. Physics with Electronics</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a style="color: #d68612;" href="{{ route('faculty', 'natural-and-applied-sciences') }}">See More</a></div>
                            </div>
                        </article>
                    </div> --}}
                    {{-- <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-news"><a><img class="img-responsive" src="{{ asset('assets/images/Dept/computing.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a>Computer Science</a></h6>
                                <div class="post_meta">
                                    <ul>
                                        <li><p>B.Sc. Computer Science</p></li>
                                        <li><p>B.Sc. Cyber Security</p></li> 
                                        <li><p>B. Sc. Software Engineering</p></li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a class="btn btn-primary btn-sm" href="{{ route('admissions') }}">Apply</a></div>
                            </div>
                        </article>
                    </div> --}}
                </div>
                {{-- <div class="offset-top-50"><a class="btn btn-primary" href="grid-news.html">View All Courses</a></div> --}}
            </div>
        </section>

{{--         <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell isotope-wrap">
                <h2 class="text-bold">Faculty of Management & Social Sciences </h2>
                <hr class="divider bg-madison">
                <div class="row range-30 isotope offset-top-60 text-left">
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-course"><a><img class="img-responsive" src="{{ asset('assets/images/Dept/account.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a>Accounting</a></h6>
                                <div class="post_meta">
                                    <ul>
                                        <li><p>B.Sc. Accounting</p></li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a class="btn btn-primary btn-sm" href="{{ route('admissions') }}">Apply</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-news"><a><img class="img-responsive" src="{{ asset('assets/images/Dept/business.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a>Business Administration</a></h6>
                                <div class="post_meta">
                                    <ul> 
                                        <li>
                                            <p>B.Sc. Entrepreneurship </p>
                                        </li>
                                        <li><p>B.Sc. Human Resource Mgt</p></li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a class="btn btn-primary btn-sm" href="{{ route('admissions') }}">Apply</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-news"><a><img class="img-responsive" src="{{ asset('assets/images/Dept/economics.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a>Economics</a></h6>
                                <div class="post_meta">
                                    <ul>
                                        <li><p>B.Sc. Economics and Development Studies </p></li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a class="btn btn-primary btn-sm" href="{{ route('admissions') }}">Apply</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 isotope-item">
                        <article class="post-news"><a><img class="img-responsive" src="{{ asset('assets/images/Dept/tax.jpg') }}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a>Taxation</a></h6>
                                <div class="post_meta">
                                    <ul>
                                        <li>
                                            <p>B.Sc. Taxation</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offset-top-10">
                                    <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                                </div>
                                <div class="post-course-meta offset-top-20"><a class="btn btn-primary btn-sm" href="{{ route('admissions') }}">Apply</a></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="offset-top-50"><a class="btn btn-primary" href="grid-news.html">View All Courses</a></div>
            </div>
        </section> --}}

        <style type="text/css">
            .post_meta p{
                font-size: 12px;
            }
        </style>
@endsection