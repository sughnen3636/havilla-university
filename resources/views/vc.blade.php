@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/parallax-03.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Chairman Board of Trustees</h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Member Profile</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-30 range-xs-center">
                    <div class="cell-sm-4 text-sm-left">
                        <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{ asset('assets/images/staff/vc.jpg') }}" width="340" height="340" alt="">
                            <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" id="bot-name" style="max-width: 340px; margin-left:auto; margin-right:auto">Prof. Florence Banku Obi</a>
                                <p class="offset-top-10" style="text-align: center !important; font-weight: bold;">Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-8 text-left">
                        {{-- <div>
                            <h3 class="text-bold">{{ $bot->name }}</h3>
                        </div> --}}
                        {{-- <p class="offset-top-10">{{ $bot->role }}</p> --}}
                        {{-- <div class="offset-top-15 offset-sm-top-30" style="margin-top: 8px!important;">
                            <hr class="divider bg-madison hr-left-0">
                        </div> --}}
                        {{-- <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Remark</h6>
                            <div class="text-subline"></div>
                        </div> --}}
                        <div class="offset-top-20">
                            <p>                     Professor Florence Banku Obi hails from Boki local government area in Cross River State. She began her academic career as an Assistant Lecturer at the Institute of Education, University of Calabar in March 1990.  She is the 11th substantive vice-chancellor of University of Calabar and the first female vice-chancellor since the inception of the institution.<br><br>
                            In 1990, Obi started her academic career as an assistant lecturer at the Institute of Education, University of Calabar. In 1992, she won a six-month postgraduate scholarship to Jordan-Hill College of Education, under the World University Service (WUS), World-Wide Fund for Nature (WWF) and the Nigerian Conservation Foundation (NCF) during an interview for staff of the Institute of Education.

                            After the scholarship offer, she was placed in charge of the WWF/NCF funded schools and community education programmes. In 2007, a became professor of special needs education.<br>     
                                                    Professor Florence Banku Obi served as the Chairman Planning and Implementation Committee Havilla University for the past five years and now as the Chairman Board of Trustees, Havilla University, Nde, Ikom.   
                            She had also served as the Chairperson of University of Calabar International Demonstration School (formerly called University of Calabar International Secondary School) where she left lasting physical legacies to her credit.

                            Following her credibility, integrity and commitment to service, she was voted as the Deputy Vice Chancellor (Academics) by the University Senate. 

                            As DVC Academics, she was also a member of the University Governing Council, where she brought her wealth of experience to bear in the growth and development of the University.</p>
                        </div>
                        {{-- <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Reach Out</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-15 offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon novi-icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:2349060381917">+2349060381917</a></li>
                                <li><span class="icon novi-icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:drndep@gmail.com">drndep@gmail.com</a></li>
                            </ul>
                        </div> --}}
                       {{--  <div class="offset-top-15 offset-sm-top-30">
                            <ul class="list-inline list-inline-xs list-inline-madison">
                                <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section novi-background bg-cover section-70 section-md-114 bg-madison context-dark">
            <div class="shell">
                <h2 class="text-bold">Skills</h2>
                <hr class="divider bg-madison">
                <div class="range range-xs-center offset-top-65">
                    <div class="cell-xs-10 cell-sm-6">
                        <div class="progress-linear-wrap">
                            <div class="progress-linear" data-to="70">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black"><span data-novi-id="8">Knowledge</span></h6>
                                    </div><span class="text-bold pull-right progress-value">70</span>
                                </div>
                                <div class="progress-bar-linear-wrap offset-top-5">
                                    <div class="progress-bar-linear bg-primary"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="42">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Experience</h6>
                                    </div><span class="text-bold pull-right progress-value">42</span>
                                </div>
                                <div class="progress-bar-linear-wrap offset-top-5">
                                    <div class="progress-bar-linear bg-primary"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="38">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Communication</h6>
                                    </div><span class="text-bold pull-right progress-value">38</span>
                                </div>
                                <div class="progress-bar-linear-wrap offset-top-5">
                                    <div class="progress-bar-linear bg-primary"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="94">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Leadership</h6>
                                    </div><span class="text-bold pull-right progress-value">94</span>
                                </div>
                                <div class="progress-bar-linear-wrap offset-top-5">
                                    <div class="progress-bar-linear bg-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection