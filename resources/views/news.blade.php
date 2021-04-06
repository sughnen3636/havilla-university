@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/Slider-2.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Latest News & Events</h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>News</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <div id="fb-root"></div>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell">
                <div class="range range-85 range-xs-center">
                    <div class="cell-md-8">
                        <div class="range range-30 text-sm-left range-xs-center">
                            <div class="cell-sm-6">
                                <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/HR.jpg')}}" width="370" height="240" alt=""></a>
                                    <div class="post-news-body">
                                        <h6><a href="#">Havilla University partners with University of Calabar to develop strategic plans for approved courses.</a></h6>
                                        <div class="offset-top-20">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.</p>
                                        </div>
                                        <div class="post-news-meta offset-top-20"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                                    </div>
                                </article>
                            </div>
                            <div class="cell-sm-6">
                                <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Entrepreneurship.jpg')}}" width="370" height="240" alt=""></a>
                                    <div class="post-news-body">
                                        <h6><a href="#">The PIC Chairman, Prof. Florence Obi receives Havilla University license from NUC on 8th April, 2021!</a></h6>
                                        <div class="offset-top-20">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.</p>
                                        </div>
                                        <div class="post-news-meta offset-top-20"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                                    </div>
                                </article>
                            </div>
                            <div class="cell-sm-6">
                                <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Accounting.jpg')}}" width="370" height="240" alt=""></a>
                                    <div class="post-news-body">
                                        <h6><a href="#">Havilla University partners with Cameroon Ministry of Education: scholarships available for Cameroonian students.</a></h6>
                                        <div class="offset-top-20">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.</p>
                                        </div>
                                        <div class="post-news-meta offset-top-20"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                                    </div>
                                </article>
                            </div>
                            <div class="cell-sm-6">
                                <article class="post-news"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/Dept/Biotechnology.jpg')}}" width="370" height="240" alt=""></a>
                                    <div class="post-news-body">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore.</a></h6>
                                        <div class="offset-top-20">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.</p>
                                        </div>
                                        <div class="post-news-meta offset-top-20"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="cell-xs-8 cell-md-4 text-left">
                        <aside class="aside inset-md-left-30">
                            {{-- <div class="aside-item">
                                <h6 class="text-bold">Search</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30">
                                    <form class="form-search rd-search form-search-widget" action="search-results.html" method="GET">
                                        <div class="form-group">
                                            <div class="input-group"><input class="form-search-input  form-control" type="text" name="s" autocomplete="off"><span class="input-group-btn"><button class="btn btn-primary" type="submit"><span class="icon fa-search"></span></button></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="aside-item">
                                <h6 class="text-bold">Archive</h6>
                                <div class="text-subline"></div>
                                <div class="row offset-top-20">
                                    <div class="col-xs-6">
                                        <ul class="list list-marked list-marked-primary">
                                            <li><a href="#">Jun 2018</a></li>
                                            <li><a href="#">Aug 2018</a></li>
                                            <li><a href="#">Oct 2018</a></li>
                                            <li><a href="#">Dec 2018</a></li>
                                            <li><a href="#">Feb 2017</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list list-marked list-marked-primary">
                                            <li><a href="#">Jul 2018</a></li>
                                            <li><a href="#">Sep 2018</a></li>
                                            <li><a href="#">Nov 2018</a></li>
                                            <li><a href="#">Jan 2018</a></li>
                                            <li><a href="#">Mar 2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="aside-item">
                                <h6 class="text-bold">Partnership</h6>
                                <div class="text-subline"></div>
                                <div class="range range-condensed range-custom offset-top-20" data-lightgallery="group">
                                     <div>
                                        <img src="{{ asset('assets/images/hotel-45.png') }}" width="200" height="200"><br>
                                        Havilla University is in partnership with Hotel 45, Ikom, to provide hotel accommodations for parents and other visitors to the school at a very subsidized rate.
                                      </div>
                                    {{-- <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-10-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                                    <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-11-1200x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-11-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                                    <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-12-1200x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-12-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                                    <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-13-1200x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-13-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                                    <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-14-533x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-14-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                                    <div class="cell-6"><a class="thumbnail-default" href="images/portfolio/gallery-15-1200x800-original.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-15-320x320.jpg" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div> --}}
                                </div>
                            </div>
                            <div class="aside-item">
                                <h6 class="text-bold">Categories</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-20">
                                    <ul class="list list-marked list-marked-primary">
                                        <li><a href="#">General News</a></li>
                                        <li><a href="#">University</a></li>
                                        <li><a href="#">Global Education</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
@endsection