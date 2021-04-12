@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/Havilla/slider-1.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block"> Havilla University Board of Trustees </h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Team&nbsp;</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h2 class="text-bold"> Members Board of Trustee </h2>
                <hr class="divider bg-madison">
                <div class="range range-30 text-md-left offset-top-60">
                    <div class="cell-sm-6 cell-md-4"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('assets/images/staff/vc.jpg') }}" width="270" height="270" alt="">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-primary" style="font-size: 17px; font-weight: bold;"><a href="{{ route('chairman') }}">Prof. Florence Banku Obi</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p style="font-size: 15px; font-weight: bold;">Chairman</p>
                        </div>
                    </div>
                    @foreach($bots as $bot)
                    <div class="cell-sm-6 cell-md-4"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('assets/images/staff/'.$bot->img) }}" width="270" height="270" alt="">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-primary" style="font-size: 17px; font-weight: bold;"><a href="{{ route('bot-profile',$bot->id) }}">{{ $bot->name }}</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p style="font-size: 15px; font-weight: bold;">{{ $bot->role }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection