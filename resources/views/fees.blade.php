@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Slider-3.jpg')}}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Havilla University Fee Schedule</h2>
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
                          <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Havilla University Fees Schedule</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>                              
                                <div class="offset-top-30">
                                  <em>Provision for Scholarships exist at Havilla University and discounts for the first 200 students.</em>
                                    <h5 style="font-weight: bold;">Nigerian Students</h5>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col" colspan="2" class="fee-semester">First Semester</th>
                                          <th scope="col" colspan="2" class="fee-semester bordered">Second Semester</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;" class="fee-hd">Description</td>
                                            <td class="fee-hd">Amount</td>

                                            <td class="fee-hd bordered">Description</td>
                                            <td class="fee-hd">Amount</td>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Tuition Fee</td>
                                              <td>&#8358;100,000.00</td>
                                              <td class="bordered">Tuition Fee</td>
                                              <td>&#8358;100,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Development Levy</td>
                                            <td>&#8358;10,000.00</td>
                                            <td class="bordered">Development Levy</td>
                                            <td>&#8358;10,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Accomodation</td>
                                            <td>&#8358;25,000.00</td>
                                            <td class="bordered">Accomodation</td>
                                            <td>&#8358;25,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Medical</td>
                                            <td>&#8358;10,000.00</td>
                                            <td class="bordered">Medical</td>
                                            <td>&#8358;10,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>ICT Fee</td>
                                            <td>&#8358;10,000.00</td>
                                            <td class="bordered">ICT Fee</td>
                                            <td>&#8358;10,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Security</td>
                                            <td>&#8358;5,000.00</td>
                                            <td class="bordered">Security</td>
                                            <td>&#8358;5,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Sports</td>
                                            <td>&#8358;5,000.00</td>
                                            <td class="bordered">Sports</td>
                                            <td>&#8358;5,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Caution Fee</td>
                                            <td>&#8358;5,000.00</td>
                                            <td class="bordered">Caution Fee</td>
                                            <td>&#8358;5,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Laboratory <br>(Science students only)</td>
                                            <td>&#8358;10,000.00</td>
                                            <td class="bordered">Laboratory <br>(Science students only)</td>
                                            <td>&#8358;10,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Acceptance Fee</td>
                                            <td class="bordered-r">&#8358;15,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Library Fee</td>
                                            <td>&#8358;5,000.00</td>
                                            <td class="bordered">Library Fee</td>
                                            <td>&#8358;5,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>Smart ID Card</td>
                                            <td class="bordered-r">&#8358;3,000.00</td>
                                          </tr>
                                          <tr>
                                            <td>O’ Level Verification (WAEC/NECO)</td>
                                            <td class="bordered-r">&#8358;3,000.00</td>
                                          </tr>
                                          <tr>
                                            <td colspan="1" class="sub-total">Sub-total</td>
                                            <td colspan="1" class="sub-total">&#8358;206,000.00</td>
                                            <td colspan="1" class="sub-total bordered">Sub-total</td>
                                            <td colspan="1" class="sub-total">&#8358;185,000.00</td>
                                          </tr>
                                          <tr>
                                            <td colspan="4" class="total-fig">Total Per Session : &#8358;391,000.00</td>
                                          </tr>
                                      </tbody>
                                    </table>
                                </div><br>

                                <div class="offset-top-30">
                                    <h5 style="font-weight: bold;">Foreign Students</h5>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">Student Category</th>
                                          <th scope="col">Amount</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Foreign Students (African Countries)</td>
                                              <td>CFA {{ number_format(732958) }} / semester <br><b style="font-size: 12px;"><em>(Accomodation Inclusive)</em></b></td>
                                          </tr>
                                          <tr>
                                              <td>Foreign Students (USA, Canada, Europe, Asia & Others)</td>
                                              <td>$1,500 / semester <br><b style="font-size: 12px;"><em>(Accomodation Inclusive)</em></b></td>
                                          </tr>
                                      </tbody>
                                    </table>
                                </div><br>
                                <div class="offset-top-30">
                                  <strong>NB: </strong><br>
                                  <ol>
                                    {{-- <li>Accomodation fee is charged per semester for students resident on campus.</li><br/> --}}
                                    <li>The Cafeteria is run as a separate entity from Havilla University.</li><br/>
                                    <li>Students are not allowed to cook in the hostels.</li>
                                  </ol>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">General Requirements</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>Admission into Havilla University is open to candidates with the requisite qualifications and subject to written and/or oral examination as the University may determine. All applicants for admission into the University must atleast 16 years of age.<br> 
                                    Admission into Havilla University is open to all irrespective of
                                    Religion, Ethnic Group, Gender, Creed and Disability.
                                    </p>
                                </div>
                                
                                <div class="offset-top-30">
                                    <p>
                                        A general overview of the admission requirements are as follows:
                                        <ul>
                                            <li>For admission to 100 Level (via UTME), candidates must: obtain five (5)
                                            credits at SSCE (or equivalent) in relevant subjects at not more than 2 sittings including credit passes in English and Mathematics; and attain acceptable points in UTME in relevant subjects.
                                            </li>
                                            <li>
                                                For admission by direct entry (200 Level), candidates must, in addition to having five (5) SSCE credits, obtain at least two (2) A' level (or its equivalent) passes in relevant subjects, or possess ND with credit passes, or possess a good first degree in another field as the case may be.
                                            </li>
                                            <li>
                                                Credit passes in English Language and Mathematics are compulsory for admission into all courses.
                                            </li>
                                            <li>
                                                Those who meet the requirements for admission shall be subjected to screening interview to be conducted by the University.
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Faculty & Departmental Requirements</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <h5 style="font-weight: bold;">Faculty of Computing & Sciences</h5>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col" rowspan="2" valign="middle">Programme</th>
                                          <th scope="col" colspan="2" valign="middle">Admission Requirements</th>
                                          <th scope="col" rowspan="2" valign="middle" style="padding-left: 10px!important;">Remarks</th>
                                        </tr>
                                        <tr>
                                            <th style="padding-left: 55px!important;">UTME</th>
                                            <th style="padding-left: 10px!important;">Direct Entry</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td scope="row">Computer Science, Cyber Security, Software Engineering</td>
                                          <td>Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics plus two other science subjects.</td>
                                          <td style="padding-left: 10px!important;">Unavailable 
                                          </td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: English, Mathematics, Physics and one of Biology, Chemistry, Agric Science, Economics and Geography.</td>
                                        </tr>

                                        <tr>
                                          <td scope="row">Physics with Electronics, Biotechnology</td>
                                          <td>Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics and Chemistry, Five Credits at SSCE (or its equivalent) in English, Mathematics, Physics, Chemistry and Biology.</td>
                                          <td style="padding-left: 10px!important;">Unavailable
                                          </td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: Biology and two of Physics, Chemistry and Mathematics.</td>
                                        </tr>

                                        <tr>
                                          <td scope="row">Industrial Chemistry</td>
                                          <td>Five Credits at SSCE (or its equivalent) in English, Mathematics, Physics, Chemistry and Biology.</td>
                                          <td style="padding-left: 10px!important;">Unavailable
                                          </td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: Chemistry and two of Physics, Biology and Mathematics.</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                                
                                <div class="offset-top-30">
                                    <h5 style="font-weight: bold;">Faculty of Management & Social Sciences</h5>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col" rowspan="2" valign="middle">Programme</th>
                                          <th scope="col" colspan="2">Admission Requirements</th>
                                          <th scope="col" rowspan="2" valign="middle">Remarks</th>
                                        </tr>
                                        <tr>
                                            <th style="padding-left: 55px!important;">UTME</th>
                                            <th style="padding-left: 10px!important;">Direct Entry</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td scope="row">Accounting, Taxation</td>
                                          <td>Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject and any other one relevant subject.</td>
                                          <td style="padding-left: 10px!important;">Unavailable</td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: English, Economics, Mathematics and any Social Science
                                            subject.
                                          </td>
                                        </tr>

                                        <tr>
                                          <td scope="row">Entrepreneurship</td>
                                          <td>Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject plus any one from Accounting, Business Methods, Commerce, Govt., Geography and Statistics.</td>
                                          <td style="padding-left: 10px!important;">Unavailable</td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: Mathematics, Economics and one other subject.</td>
                                        </tr>

                                        <tr>
                                          <td scope="row">Human Resource Management</td>
                                          <td>Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject plus any one from Accounting, Business Methods, Commerce, Govt., Geography and Statistics.</td>
                                          <td style="padding-left: 10px!important;">Unavailable</td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: Mathematics, Economics and one other subject.</td>
                                        </tr>

                                        <tr>
                                          <td scope="row">Economics and Development Studies</td>
                                          <td>Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject plus any one from Accounting, Business Methods, Commerce, Govt., Geography and Statistics.</td>
                                          <td style="padding-left: 10px!important;">Unavailable</td>
                                          <td style="padding-left: 10px!important;">UTME subjects are: Mathematics, Economics and one other subject.</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>

                                <br/>
                                <br/>
                                <p>Prospective students must satisfy the above enumerated requirements for their programme of choice in addition to the general requirements, before they can be eligible to apply for any programme at Havilla University.</p>

                                <a class="btn btn-default apply-btn" href="{{ route('apply') }}"><span data-novi-id="3">Apply Today</span></a>
                            </div>
                        </div>
                        <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Begin your journey to greatness</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>Please carefully complete the following form and we will be in touch as soon as possible with next steps.</p>
                                </div>
                                <div class="offset-top-30">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                       <!--  <div>
                            <div class="inset-lg-right-60">
                                <h3 class="text-bold veil reveal-lg-block">Global Education</h3>
                                <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                                <div class="offset-lg-top-30">
                                    <p>The Eric and Nicole Fisher Center for International and Area Studies at JWU is the University's focal point for encouraging and coordinating teaching and research on global affairs, regions, and cultures around the world. From science and engineering to arts and humanities, explore the many different ways in which faculty, students, and scholars at James Whitaker undertake study, research and discussion about international and global issues.</p>
                                </div>
                                <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="images/academics-04-770x480.jpg" width="770" height="480" alt=""></div>
                                <div class="offset-top-30">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nihil ratione quos vel nisi est ipsum sed labore, obcaecati. Illum hic tenetur assumenda libero rerum quis repellat earum aliquam quos cumque sint minima tempora totam eos, dolorem eligendi quae voluptates modi temporibus necessitatibus? Neque laborum perferendis facilis, nesciunt mollitia incidunt omnis nemo dicta! Blanditiis necessitatibus aut deserunt qui, id quidem distinctio, minus autem impedit quas esse. Et, provident quibusdam error illo nihil voluptatibus, repellat nesciunt neque repudiandae illum ex ad natus distinctio? Officia dignissimos, commodi excepturi similique inventore ducimus autem, adipisci porro error ratione in, magnam voluptates numquam aut a.</p>
                                </div>
                            </div>
                        </div> -->
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
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-0" role="tab">Fee Schedule</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-1" role="tab">General Requirements</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-2" role="tab">Faculty & Departmental Requirements</li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active"  role="tab"><strong><a href="{{ route('apply') }}" class="btn btn-primary btn-lg">Apply</a></strong></li>
                        <li class="resp-tab-item tabs-lg-collapsed resp-tab-active" aria-controls="tabs-lg-collapsed_tab_item-3" role="tab" style="border-top: 2px solid #ddd; color: black; font-size: 12px;">
                          <div>
                            <img src="{{ asset('assets/images/hotel-45.png') }}" width="200" height="200"><br>
                            Havilla University is in partnership with Hotel 45, Ikom, to provide hotel accommodations for parents and other visitors to the school at a very subsidized rate.
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