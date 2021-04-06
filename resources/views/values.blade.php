@extends('layouts.master')
    @section('content')

        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/Slider-2.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">More About Havilla</h2>
                    <!-- <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-90 section-md-114 bg-default" style="padding-bottom: 5px !important;">
            <div class="shell">
                <div class="responsive-tabs responsive-tabs-classic vertical" data-type="vertical">
                    <div class="resp-tabs-container text-sm-left tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Our Core Values</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>The core values of our great institution is built on the premise of <strong>Learning, Integrity, Excellence, Ethical Standards, Discipline, Technology and Academic Freedom</strong>, these form the basis upon which our excellent graduates are molded.</p>
                                    <a class="btn btn-default apply-btn" href="{{ route('apply') }}"><span data-novi-id="3">Apply Today</span></a>
                                </div>
                                {{-- <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="{{ asset('assets/images/academics-03-770x480.jpg')}}" width="770" height="480" alt=""></div> --}}
                                <div class="offset-top-30">
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
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Our Mission</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>To transform the lives of our students and staff and empower them with knowledge, skills and values to enable them excel in their fields, achieve success and transform their societies.</p>
                                    <a class="btn btn-default apply-btn" href="{{ route('admissions') }}"><span data-novi-id="3">Join us on this journey</span></a>
                                </div>
                                {{-- <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="{{ asset('assets/images/academics-01-770x480.jpg') }}" width="770" height="480" alt=""></div> --}}
                                <div class="offset-top-30">
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
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Our Vision</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>To be a leading university, recognized nationally and internationally, for promoting innovations in teaching, research and public service through our academic programmes.</p>
                                    <a class="btn btn-default apply-btn" href="{{ route('admissions') }}"><span data-novi-id="3">Share this vision</span></a>
                                </div>
                                {{-- <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="{{ asset('assets/images/academics-02-770x480.jpg')}}" width="770" height="480" alt=""></div> --}}
                                <div class="offset-top-30">
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
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Our Philosophy</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>The philosophy of Havilla University will be guided by a five-point agenda that focuses on the impact of the University on its staff and students and the world at large. The cardinal points are:</p>
                                </div>
                                {{-- <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="images/academics-04-770x480.jpg" width="770" height="480" alt=""></div> --}}
                                <div class="offset-top-30">
                                    <p>
                                        <ul>
                                            <li>
                                                <b>Knowledge centered:</b> This is rooted in the philosophy that knowledge is power. It holds the belief that learning illuminates the mind and also brightens the path of human beings to progressive self-discovery, leading to innovative contribution to development.
                                            </li>
                                            <li>
                                                <b>Student Centered:</b> An avenue that prepares students to be intellectually sound, morally balanced and professionally proficient will be instituted in the university. This will provide wide opportunities for resources and facilities to enhance students’ learning experience.
                                            </li>
                                            <li>
                                                <b>Participatory Communities:</b> This is to promote participatory management by stakeholders to contribute to the achievement of the goals and objectives of the university.
                                            </li>
                                            <li>
                                                <b>Balancing Stability and Change:</b> With relevance to the rapid changing social and technological revolutions of the 21st century, the university will create a balance in retaining positive values while it strives to reverse the level of poverty and place relevance on the institution of entrepreneurial education, job creation and value re-orientation.
                                            </li>
                                            <li>
                                                <b>Global relevance:</b> This will ensure that the teaching, learning, and community service of the university will embrace international perspective and the impact of globalization, while acting locally to meet societal needs.
                                            </li>
                                        </ul>
                                    </p>
                                    <a class="btn btn-default apply-btn" href="{{ route('apply') }}"><span data-novi-id="3">Apply Today</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Summer Session</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30"><img class="img-responsive reveal-inline-block" src="images/academics-05-770x480.jpg" width="770" height="480" alt=""></div>
                                <div class="offset-top-30">
                                    <p>JWU Summer Session offers courses during the summer for JWU students, qualified undergraduate students from other colleges and universities, students about to enter their last year in high school, and adult learners. Additional programs offered through JWU Summer Session include: Study Abroad, English Language Institute, Online Courses, Writers' Conference, Drama and Film, and Foreign Language Courses.</p>
                                </div>
                                <div class="offset-top-30"><a class="btn btn-primary" href="#">Choose a Program</a></div>
                            </div>
                        </div> -->
                        <!-- <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Non-Degree Offerings</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>You don't have to be a James Whitaker University student to have access to a JWU education.</p>
                                    <p>From online courses to on-campus experiences, there are a range of learning opportunities available for non-degree seekers.</p>
                                </div>
                                <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="images/academics-06-770x480.jpg" width="770" height="480" alt=""></div>
                                <div class="offset-top-30">
                                    <h6 class="text-bold">James Whitaker College</h6>
                                    <div class="text-subline"></div>
                                    <div class="offset-top-20">
                                        <p>Visit a class or take courses for credit without matriculating as a James Whitaker University undergraduate.</p>
                                    </div>
                                </div>
                                <div class="offset-top-30">
                                    <h6 class="text-bold">Graduate &amp; Professional Schools</h6>
                                    <div class="text-subline"></div>
                                    <div class="offset-top-20">
                                        <p>The schools of JWU offer non-degree programs ranging from research opportunities to continuing education.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Online Learning</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>We explore online learning for a wide and global audience: from lifelong learners seeking to improve knowledge skills, to undergraduate and graduate students looking to supplement their current classes or take a class online for college credit, a certificate or a degree.</p>
                                </div>
                                <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="images/academics-07-770x480.jpg" width="770" height="480" alt=""></div>
                                <div class="offset-top-30">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae blanditiis aut tempore obcaecati quae ipsa. Beatae ipsa fugiat velit mollitia ab ex voluptas, iusto ipsum doloremque aspernatur nisi inventore fuga, dolore soluta culpa vitae ea! Pariatur aut ipsam consequuntur est voluptatem! Nulla, nisi nesciunt libero voluptatibus. Dolorum sit repellat voluptatibus obcaecati tempore hic, harum explicabo molestias quaerat doloribus enim facere qui eaque numquam nobis magni facilis molestiae excepturi. Dolorem quae voluptatum aut ducimus eaque sed quibusdam nesciunt unde. Repudiandae similique, alias voluptas repellat quod. Dolores necessitatibus eaque nostrum, quaerat optio ad sint incidunt dolor nobis expedita asperiores, autem modi perspiciatis.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <ul class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-0" role="tab">Our Core Values</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-1" role="tab">Our Mission</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-2" role="tab">Our Vision</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-3" role="tab">Our Philosophy</li>
                        {{-- <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-4" role="tab">Summer Session</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-5" role="tab">Non-Degree Offerings</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-6" role="tab">Online Learning</li> --}}
                    </ul>
                </div>
            </div>
        </section>

        @endsection