@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/Slider-2.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">History of Havilla University</h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>History</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-50">
                    <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                        <div class="inset-sm-left-30"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('assets/images/header-1.jpg') }}" width="340" height="300" alt="">
                            <div class="offset-top-20">
                                <h6 class="text-primary text-bold">Havilla University </h6>
                            </div>
                            <p>Nde, Ikom</p>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-sm-push-1 text-sm-left">
                        <h2 class="text-bold">Brief History</h2>
                        <hr class="divider bg-madison hr-sm-left-0">
                        <div class="offset-top-30 offset-sm-top-30">
                            <p>Havilla University was founded by Hon. Jones Ayuk Ojong Tangban, born on 30<sup>th</sup> of May, 1959, from Nturokim village of Akparabong community in Ikom Local Government of Cross River State, in continuation of his dream and passion for educational advancement in Nigeria. The university was approved in February 2021 by the Federal Government and given recognition by the National Universities Commission (NUC) to run both undergraduate and postgraduate academic programmes in phases. The university will commence academic activities in September, 2021 with two (2) faculties, eight (8) departments and eleven (11) undergraduate programmes.
                            A brain child of Steadyflow International Ltd (Steadyflow Group of Schools), Havilla University started fourteen (14) years ago as work–in-progress. The project was mid-wifed by the Planning and Implementation Committee (PIC) and a Board of Trustees which serves as the conscience of the new private university, constituted by the Proprietor and CEO of Steadyflow International, Hon. Jones Ayuk Ojong Tangban and ably chaired by a renown Professor of Education, Prof. Florence Banku Obi the present Vice Chancellor of the University of Calabar, Cross River State, Nigeria. The planning and Implementation Committee (PIC) which has other eminent scholars as members worked round the clock to make Havilla University a reality today. 
                            <br>It has always been the dream of the founder, under the laws of the Federal Republic of Nigeria, to develop human capital through quality education and training to produce visionary leaders that can efficiently face the challenges of the 21st century to drive economic growth and development as well as political stability in our nation and beyond. The founder also wants to give back to society through quality and affordable education.<br>As he fondly says: <q><em>It does not have to be expensive to be valuable.</em></q><br/><br/>
                            Havilla University is owned by Steadyflow International Ltd, an indigenous company in Nigeria, also founded by Hon. Jones Tangban. Steadyflow International Ltd owns and runs a group of schools, prominent among them are Steadyflow International Schools High School, Dutse Alhaji, FCT-Abuja, Steadyflow Nursery and Primary School, Dutse Alhaji, FCT-Abuja, and Steadyflow College of Education Akparabong, Ikom, Cross River State.
                            </p>
                        </div>
                        <br/><br/>
                        <h2 class="text-bold"><i class="mdi mdi-map-marker"></i> Location</h2>
                        <p>
                            Sitting on 228 hectares of land with a Certificate of Occupancy (C of O), Havilla University is located at Kilometer 17 Ikom-Ogoja Expressway in Nde, Ikom Local Government Area of Cross River State, Nigeria. The School is sandwiched in between Akwa Ibom, Abia, Ebonyi and Benue States as well as the Republic of Cameroon towards the Atlantic Coastlines, this makes the location quite strategic and accessible. 
                        </p><br>

                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1015703.3041144932!2d8.126964499828645!3d6.050707268137224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105c68f2bf93d6ab%3A0xe703861970bde1bb!2sNde!5e0!3m2!1sen!2sng!4v1617973986530!5m2!1sen!2sng" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a class="btn btn-default apply-btn" href="{{ route('apply') }}"><span data-novi-id="3">About Our Admission</span></a> --}}
        </section>

        {{-- <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
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
@endsection