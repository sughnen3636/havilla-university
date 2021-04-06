@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/Slider-2.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Apply for a Course</h2>
                    <div class="offset-sm-top-35">
                        <!-- <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-65 range-xs-center">
                    <div class="cell-md-8 text-md-left">
                        <h2 class="text-bold">Begin a great educational journey at Havilla University today!</h2>
                        <hr class="divider bg-madison hr-md-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            @if(session('applied'))
                 
                            @else
                            <p>
                                Please carefully complete the form below to create a profile on the school admission portal.<br>
                                You can subsequently track your admission status and get other information by regularly logging into your profile.
                            </p>
                            @endif
                        </div>
                        <div class="offset-top-30">
                            @if(session('applied'))
                                <div class="alert alert-success" role="alert">
                                    {!! session('applied') !!}
                                </div>                  
                            @else
                            <form action="{{ route('apply-submit') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">First Name</label>
                                      <input type="text" name="f_name" class="form-control{{ $errors->has('f_name') ? ' is-invalid' : '' }}" id="inputEmail4" value="{{old('f_name')}}" required="">
                                      @if ($errors->has('f_name'))
                                        <span class="invalid-feedback" role="alert" style="color: red !important;">
                                            <strong>{{ $errors->first('f_name') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Last Name</label>
                                      <input type="text" name="l_name" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }}" id="inputPassword4" value="{{old('l_name')}}" required="">
                                      @if ($errors->has('l_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('l_name') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Other Names</label>
                                      <input type="text" name="o_name" class="form-control{{ $errors->has('o_name') ? ' is-invalid' : '' }}" id="inputEmail4" value="{{old('o_name')}}">
                                      @if ($errors->has('o_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('o_name') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Gender</label>
                                      <select id="inputState" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="gender" required="">
                                        <option selected>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                      @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Email</label>
                                      <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputPassword4" value="{{old('email')}}" required="">
                                      @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputCity">Phone Number</label>
                                      <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="inputCity" value="{{old('phone')}}" required="">
                                      @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Password</label>
                                      <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword4" value="{{old('password')}}" required="">
                                      @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Confirm Password</label>
                                      <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="inputPassword4" value="{{old('password_confirmation')}}" required="">
                                      @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputState">Course</label>
                                      <select id="inputState" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" required="">
                                        <option selected>Choose...</option>
                                        <option value="Biotechnology" {{ $choosen == 'department-of-biological-science'?'selected':'' }}> Biotechnology</option>
                                        <option value="Industrial Chemistry" {{ $choosen == 'department-of-chemistry'?'selected':'' }}> Industrial Chemistry</option>
                                        <option value="Physics with Electronics" {{ $choosen == 'department-of-physics'?'selected':'' }}>Physics with Electronics</option>
                                        <option value="Computer Science" {{ $choosen == 'department-of-computer-science'?'selected':'' }}>Computer Science</option>
                                        <option value="Cyber Security" {{ $choosen == 'department-of-cyber-security'?'selected':'' }}>Cyber Security</option>
                                        <option value="Software Engineering" {{ $choosen == 'department-of-software-engineering'?'selected':'' }}>Software Engineering</option>
                                        <option value="Accounting" {{ $choosen == 'department-of-accounting'?'selected':'' }}>Accounting</option>
                                        <option value="Entrepreneurship" {{ $choosen == 'department-of-entrepreneurship'?'selected':'' }}>Entrepreneurship</option>
                                        <option value="Business Administration" {{ $choosen == 'department-of-business-administration'?'selected':'' }}>Business Administration</option>
                                        <option value="Economics and Development Studies" {{ $choosen == 'department-of-economics'?'selected':'' }}>Economics and Development Studies</option>
                                        <option value="Taxation" {{ $choosen == 'department-of-taxation'?'selected':'' }}>Taxation</option>
                                      </select>
                                      @if ($errors->has('course'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('course') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Location</label>
                                      <select name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" required="">
                                       <option value="Afganistan">Afghanistan</option>
                                       <option value="Albania">Albania</option>
                                       <option value="Algeria">Algeria</option>
                                       <option value="American Samoa">American Samoa</option>
                                       <option value="Andorra">Andorra</option>
                                       <option value="Angola">Angola</option>
                                       <option value="Anguilla">Anguilla</option>
                                       <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                       <option value="Argentina">Argentina</option>
                                       <option value="Armenia">Armenia</option>
                                       <option value="Aruba">Aruba</option>
                                       <option value="Australia">Australia</option>
                                       <option value="Austria">Austria</option>
                                       <option value="Azerbaijan">Azerbaijan</option>
                                       <option value="Bahamas">Bahamas</option>
                                       <option value="Bahrain">Bahrain</option>
                                       <option value="Bangladesh">Bangladesh</option>
                                       <option value="Barbados">Barbados</option>
                                       <option value="Belarus">Belarus</option>
                                       <option value="Belgium">Belgium</option>
                                       <option value="Belize">Belize</option>
                                       <option value="Benin">Benin</option>
                                       <option value="Bermuda">Bermuda</option>
                                       <option value="Bhutan">Bhutan</option>
                                       <option value="Bolivia">Bolivia</option>
                                       <option value="Bonaire">Bonaire</option>
                                       <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                       <option value="Botswana">Botswana</option>
                                       <option value="Brazil">Brazil</option>
                                       <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                       <option value="Brunei">Brunei</option>
                                       <option value="Bulgaria">Bulgaria</option>
                                       <option value="Burkina Faso">Burkina Faso</option>
                                       <option value="Burundi">Burundi</option>
                                       <option value="Cambodia">Cambodia</option>
                                       <option value="Cameroon">Cameroon</option>
                                       <option value="Canada">Canada</option>
                                       <option value="Canary Islands">Canary Islands</option>
                                       <option value="Cape Verde">Cape Verde</option>
                                       <option value="Cayman Islands">Cayman Islands</option>
                                       <option value="Central African Republic">Central African Republic</option>
                                       <option value="Chad">Chad</option>
                                       <option value="Channel Islands">Channel Islands</option>
                                       <option value="Chile">Chile</option>
                                       <option value="China">China</option>
                                       <option value="Christmas Island">Christmas Island</option>
                                       <option value="Cocos Island">Cocos Island</option>
                                       <option value="Colombia">Colombia</option>
                                       <option value="Comoros">Comoros</option>
                                       <option value="Congo">Congo</option>
                                       <option value="Cook Islands">Cook Islands</option>
                                       <option value="Costa Rica">Costa Rica</option>
                                       <option value="Cote DIvoire">Cote DIvoire</option>
                                       <option value="Croatia">Croatia</option>
                                       <option value="Cuba">Cuba</option>
                                       <option value="Curaco">Curacao</option>
                                       <option value="Cyprus">Cyprus</option>
                                       <option value="Czech Republic">Czech Republic</option>
                                       <option value="Denmark">Denmark</option>
                                       <option value="Djibouti">Djibouti</option>
                                       <option value="Dominica">Dominica</option>
                                       <option value="Dominican Republic">Dominican Republic</option>
                                       <option value="East Timor">East Timor</option>
                                       <option value="Ecuador">Ecuador</option>
                                       <option value="Egypt">Egypt</option>
                                       <option value="El Salvador">El Salvador</option>
                                       <option value="Equatorial Guinea">Equatorial Guinea</option>
                                       <option value="Eritrea">Eritrea</option>
                                       <option value="Estonia">Estonia</option>
                                       <option value="Ethiopia">Ethiopia</option>
                                       <option value="Falkland Islands">Falkland Islands</option>
                                       <option value="Faroe Islands">Faroe Islands</option>
                                       <option value="Fiji">Fiji</option>
                                       <option value="Finland">Finland</option>
                                       <option value="France">France</option>
                                       <option value="French Guiana">French Guiana</option>
                                       <option value="French Polynesia">French Polynesia</option>
                                       <option value="French Southern Ter">French Southern Ter</option>
                                       <option value="Gabon">Gabon</option>
                                       <option value="Gambia">Gambia</option>
                                       <option value="Georgia">Georgia</option>
                                       <option value="Germany">Germany</option>
                                       <option value="Ghana">Ghana</option>
                                       <option value="Gibraltar">Gibraltar</option>
                                       <option value="Great Britain">Great Britain</option>
                                       <option value="Greece">Greece</option>
                                       <option value="Greenland">Greenland</option>
                                       <option value="Grenada">Grenada</option>
                                       <option value="Guadeloupe">Guadeloupe</option>
                                       <option value="Guam">Guam</option>
                                       <option value="Guatemala">Guatemala</option>
                                       <option value="Guinea">Guinea</option>
                                       <option value="Guyana">Guyana</option>
                                       <option value="Haiti">Haiti</option>
                                       <option value="Hawaii">Hawaii</option>
                                       <option value="Honduras">Honduras</option>
                                       <option value="Hong Kong">Hong Kong</option>
                                       <option value="Hungary">Hungary</option>
                                       <option value="Iceland">Iceland</option>
                                       <option value="Indonesia">Indonesia</option>
                                       <option value="India">India</option>
                                       <option value="Iran">Iran</option>
                                       <option value="Iraq">Iraq</option>
                                       <option value="Ireland">Ireland</option>
                                       <option value="Isle of Man">Isle of Man</option>
                                       <option value="Israel">Israel</option>
                                       <option value="Italy">Italy</option>
                                       <option value="Jamaica">Jamaica</option>
                                       <option value="Japan">Japan</option>
                                       <option value="Jordan">Jordan</option>
                                       <option value="Kazakhstan">Kazakhstan</option>
                                       <option value="Kenya">Kenya</option>
                                       <option value="Kiribati">Kiribati</option>
                                       <option value="Korea North">Korea North</option>
                                       <option value="Korea Sout">Korea South</option>
                                       <option value="Kuwait">Kuwait</option>
                                       <option value="Kyrgyzstan">Kyrgyzstan</option>
                                       <option value="Laos">Laos</option>
                                       <option value="Latvia">Latvia</option>
                                       <option value="Lebanon">Lebanon</option>
                                       <option value="Lesotho">Lesotho</option>
                                       <option value="Liberia">Liberia</option>
                                       <option value="Libya">Libya</option>
                                       <option value="Liechtenstein">Liechtenstein</option>
                                       <option value="Lithuania">Lithuania</option>
                                       <option value="Luxembourg">Luxembourg</option>
                                       <option value="Macau">Macau</option>
                                       <option value="Macedonia">Macedonia</option>
                                       <option value="Madagascar">Madagascar</option>
                                       <option value="Malaysia">Malaysia</option>
                                       <option value="Malawi">Malawi</option>
                                       <option value="Maldives">Maldives</option>
                                       <option value="Mali">Mali</option>
                                       <option value="Malta">Malta</option>
                                       <option value="Marshall Islands">Marshall Islands</option>
                                       <option value="Martinique">Martinique</option>
                                       <option value="Mauritania">Mauritania</option>
                                       <option value="Mauritius">Mauritius</option>
                                       <option value="Mayotte">Mayotte</option>
                                       <option value="Mexico">Mexico</option>
                                       <option value="Midway Islands">Midway Islands</option>
                                       <option value="Moldova">Moldova</option>
                                       <option value="Monaco">Monaco</option>
                                       <option value="Mongolia">Mongolia</option>
                                       <option value="Montserrat">Montserrat</option>
                                       <option value="Morocco">Morocco</option>
                                       <option value="Mozambique">Mozambique</option>
                                       <option value="Myanmar">Myanmar</option>
                                       <option value="Nambia">Nambia</option>
                                       <option value="Nauru">Nauru</option>
                                       <option value="Nepal">Nepal</option>
                                       <option value="Netherland Antilles">Netherland Antilles</option>
                                       <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                       <option value="Nevis">Nevis</option>
                                       <option value="New Caledonia">New Caledonia</option>
                                       <option value="New Zealand">New Zealand</option>
                                       <option value="Nicaragua">Nicaragua</option>
                                       <option value="Niger">Niger</option>
                                       <option value="Nigeria">Nigeria</option>
                                       <option value="Niue">Niue</option>
                                       <option value="Norfolk Island">Norfolk Island</option>
                                       <option value="Norway">Norway</option>
                                       <option value="Oman">Oman</option>
                                       <option value="Pakistan">Pakistan</option>
                                       <option value="Palau Island">Palau Island</option>
                                       <option value="Palestine">Palestine</option>
                                       <option value="Panama">Panama</option>
                                       <option value="Papua New Guinea">Papua New Guinea</option>
                                       <option value="Paraguay">Paraguay</option>
                                       <option value="Peru">Peru</option>
                                       <option value="Phillipines">Philippines</option>
                                       <option value="Pitcairn Island">Pitcairn Island</option>
                                       <option value="Poland">Poland</option>
                                       <option value="Portugal">Portugal</option>
                                       <option value="Puerto Rico">Puerto Rico</option>
                                       <option value="Qatar">Qatar</option>
                                       <option value="Republic of Montenegro">Republic of Montenegro</option>
                                       <option value="Republic of Serbia">Republic of Serbia</option>
                                       <option value="Reunion">Reunion</option>
                                       <option value="Romania">Romania</option>
                                       <option value="Russia">Russia</option>
                                       <option value="Rwanda">Rwanda</option>
                                       <option value="St Barthelemy">St Barthelemy</option>
                                       <option value="St Eustatius">St Eustatius</option>
                                       <option value="St Helena">St Helena</option>
                                       <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                       <option value="St Lucia">St Lucia</option>
                                       <option value="St Maarten">St Maarten</option>
                                       <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                       <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                       <option value="Saipan">Saipan</option>
                                       <option value="Samoa">Samoa</option>
                                       <option value="Samoa American">Samoa American</option>
                                       <option value="San Marino">San Marino</option>
                                       <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                       <option value="Saudi Arabia">Saudi Arabia</option>
                                       <option value="Senegal">Senegal</option>
                                       <option value="Seychelles">Seychelles</option>
                                       <option value="Sierra Leone">Sierra Leone</option>
                                       <option value="Singapore">Singapore</option>
                                       <option value="Slovakia">Slovakia</option>
                                       <option value="Slovenia">Slovenia</option>
                                       <option value="Solomon Islands">Solomon Islands</option>
                                       <option value="Somalia">Somalia</option>
                                       <option value="South Africa">South Africa</option>
                                       <option value="Spain">Spain</option>
                                       <option value="Sri Lanka">Sri Lanka</option>
                                       <option value="Sudan">Sudan</option>
                                       <option value="Suriname">Suriname</option>
                                       <option value="Swaziland">Swaziland</option>
                                       <option value="Sweden">Sweden</option>
                                       <option value="Switzerland">Switzerland</option>
                                       <option value="Syria">Syria</option>
                                       <option value="Tahiti">Tahiti</option>
                                       <option value="Taiwan">Taiwan</option>
                                       <option value="Tajikistan">Tajikistan</option>
                                       <option value="Tanzania">Tanzania</option>
                                       <option value="Thailand">Thailand</option>
                                       <option value="Togo">Togo</option>
                                       <option value="Tokelau">Tokelau</option>
                                       <option value="Tonga">Tonga</option>
                                       <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                       <option value="Tunisia">Tunisia</option>
                                       <option value="Turkey">Turkey</option>
                                       <option value="Turkmenistan">Turkmenistan</option>
                                       <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                       <option value="Tuvalu">Tuvalu</option>
                                       <option value="Uganda">Uganda</option>
                                       <option value="United Kingdom">United Kingdom</option>
                                       <option value="Ukraine">Ukraine</option>
                                       <option value="United Arab Erimates">United Arab Emirates</option>
                                       <option value="United States of America">United States of America</option>
                                       <option value="Uraguay">Uruguay</option>
                                       <option value="Uzbekistan">Uzbekistan</option>
                                       <option value="Vanuatu">Vanuatu</option>
                                       <option value="Vatican City State">Vatican City State</option>
                                       <option value="Venezuela">Venezuela</option>
                                       <option value="Vietnam">Vietnam</option>
                                       <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                       <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                       <option value="Wake Island">Wake Island</option>
                                       <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                       <option value="Yemen">Yemen</option>
                                       <option value="Zaire">Zaire</option>
                                       <option value="Zambia">Zambia</option>
                                       <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                      @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                       @endif
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12" style="margin-top: 25px;">
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div class="cell-xs-10 cell-md-4 text-left">
                        <aside class="aside inset-md-left-30">
                            <div>
                            <img src="{{ asset('assets/images/dept-side.jpg') }}"><br>
                          </div>
{{--                             <div class="aside-item-2">
                                <h6 class="text-bold">Phones</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <ul class="list list-unstyled">
                                        <li><span class="icon novi-icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-1234-567">1-800-1234-567</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">E-mail</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <ul class="list list-unstyled">
                                        <li><span class="icon novi-icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a class="text-primary text-middle inset-left-10" href="mailto:info@demolink.org">info@havilla.edu</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Address</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left"><span class="icon novi-icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                                        <div class="unit-body">
                                            <p><a class="text-dark" href="#">Havilla University, Nde-Ikom, Cross River State, Nigeria.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Opening Hours</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                                        <div class="unit-body">
                                            <div>
                                                <p>Mon-Fri: 8:00am-8:00pm</p>
                                            </div>
                                            <div>
                                                <p>Sat: 8:00am-3:00pm</p>
                                            </div>
                                            <div>
                                                <p>Sun: Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Socials</h6>
                                <div class="hr bg-gray-light offset-top-10"></div>
                                <ul class="list-inline list-inline-xs list-inline-madison">
                                    <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                                </ul>
                            </div> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section">
            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-100&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:65},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:&quot;50&quot;},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-100&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:&quot;30&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:&quot;40&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffff00&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-97}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-100}]}]" data-key="AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8" data-zoom="16">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                </ul>
            </div>
        </section> --}}
@endsection