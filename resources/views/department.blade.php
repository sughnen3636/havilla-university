@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Dept/Faculties/Headers/'.$img) }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">{{ $dept }}</h2>
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
                                <h3 class="text-bold veil reveal-lg-block">Department Overview</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>{!! $overview !!}</p>
                                </div><br/><br/>
                                @if($add_img1 !== '')
                                    <div style="display: flex; justify-content: space-around;">
                                        <img src="{{ asset('assets/images/Dept/Footers/'.$add_img1) }}">
                                        <img src="{{ asset('assets/images/Dept/Footers/'.$add_img2) }}">
                                    </div><br/><br/>
                                @endif
                                
                                @if($req !== '')
                                <h3 class="text-bold veil reveal-lg-block">Requirements</h3>
                                    <div class="offset-top-30">
                                        {!! $req !!}
                                    </div>
                                @endif
                                <h3 class="text-bold veil reveal-lg-block">Degree Awarded</h3>
                                <div class="offset-top-30">
                                    <i class="fa fa-graduation-cap"></i> {!! $degree !!}
                                </div>
                            </div>
                                <a class="btn btn-default apply-btn" href="{{ route('dept-apply', strtolower(str_replace(' ', '-', $dept))) }}"><span data-novi-id="3">Apply Today</span></a> 
                                <a class="btn btn-default apply-btn" href="{{ route('fees') }}"><span data-novi-id="3">Fees Schedule</span></a>
                        </div>
                    </div>
                    <ul class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                        {{-- <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-0" role="tab">Overview</li> --}}
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-3" role="tab">
                          <div>
                            <img src="{{ asset('assets/images/dept-side.jpg') }}"><br>
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