@extends('layouts.master')
    @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{ asset('assets/images/Havilla/slider-1.jpg') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Reach Out to Us</h2>
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
                        <h2 class="text-bold">Get in Touch</h2>
                        <hr class="divider bg-madison hr-md-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            <p>You can contact us any way that is convenient for you. We are available 24/7 via call or email.<br> You can also use a quick contact form below or visit us personally. We would be happy to answer your questions.</p>
                        </div>
                        <div class="offset-top-30">
                            @if(session('contacted'))
                                <div class="alert alert-success" role="alert">
                                    {!! session('contacted') !!}
                                </div>                  
                            @else
                            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('contact')}}">
                                @csrf
                                <div class="range range-12">
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-me-name">First name</label><input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} form-validation-inside" id="contact-me-name" type="text" name="first_name" data-constraints="@Required" value="{{old('first_name')}}">
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-me-last-name">Last name</label><input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} form-validation-inside" id="contact-me-last-name" type="text" name="last_name" data-constraints="@Required" value="{{old('last_name')}}">
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-me-email">E-mail</label><input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-validation-inside" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-me-phone">Phone</label><input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} form-validation-inside" id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-me-message">Message</label><textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }} form-validation-inside" id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px">{{old('message')}}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center text-md-left offset-top-20"><button class="btn btn-primary" type="submit">Send Message</button></div>
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="cell-xs-10 cell-md-4 text-left">
                        <aside class="aside inset-md-left-30">
                            <div class="aside-item-2">
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
                                            <p><a class="text-dark" href="#">Havilla University, Nde-Ikom, Cross River State, Nigeria</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="aside-item-2">
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
                            </div> --}}
                            <div class="aside-item-2">
                                <h6 class="text-bold">Socials</h6>
                                <div class="hr bg-gray-light offset-top-10"></div>
                                <ul class="list-inline list-inline-xs list-inline-madison">
                                    <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                                </ul>
                            </div>
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