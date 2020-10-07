@extends('app')
@section('content')
    {{--<section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider slider-h-75">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-center">
                    <div class="slide-content row justify-content-center">
                        <div class="col-12 d-flex inner">
                            <div class="center align-self-center text-center">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Digital Culture</h1>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum</p>
                                <a href="#contact"  class="btn ml-auto mr-auto primary-button"><i class="icon-arrow-down-circle"></i>Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Hero -->
    <section id="slider" class="hero p-0 featured left edit-banner">
        <div class="swiper-container no-slider animation slider-h-100">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide slide-center">
                    <img data-aos="zoom-out-up" data-aos-delay="800" src="{{asset('_landing/assets/images/banner8.png')}}" class="hero-image {{--check-image--}}" alt="Hero Image">
                    <div class="slide-content row">
                        <div class="col-12 d-flex inner justify-center">
                            <div class=" col-12 align-self-center text-center ">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text edit-title">Digital Culture In Nigeria:</h1>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Current Status, Challenges & The Way Forward.</p>
                                <div class="row justify-content-center align-self-center text-center">
                                    <div class="mr-2">
                                        <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto  mt-4 btn primary-button"><i class="icon-cup"></i>Register Now</a>
                                    </div>
                                    <div>
                                        <a href="https://blog.xownsolutions.com" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto  mt-4 btn primary-button"><i class="icon-book-open"></i>View Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section-1 form">
        <div class="container">
            <form action="{{route('event.submit-registration-form')}}" id="leverage-form" class="multi-step-form">
               @csrf
                <input type="hidden" name="section" value="leverage_form">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-start text-center text-md-left">
                        <!-- Success Message -->
                        <div class="row success message">
                            <div class="col-12 p-0">
                                <div class="wait">
                                    <div class="spinner-grow" role="status">
                                        <span class="sr-only">Loading</span>
                                    </div>
                                    <h3 class="sending">SENDING</h3>
                                </div>
                                <div class="done">
                                    <i class="icon bigger icon-check"></i>
                                    <h3 id="success-message">Your message was sent successful. Thanks.</h3>
                                    <a href="{{route('homepage')}}" class="btn mx-auto primary-button">
                                        <i class="icon-refresh"></i>
                                        REFRESH
                                    </a>
                                </div>
                                <div class="error">
                                    <i style="color:red !important;" class="icon bigger icon-info"></i>
                                    <h3 id="error-message" style="color:red !important;">Email Already Exist</h3>
                                    <a href="{{route('homepage')}}" class="btn mx-auto primary-button">
                                        <i class="icon-refresh"></i>
                                        REFRESH
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Steps Message -->
                        <div class="row intro form-content">
                            <div class="col-12 p-0">
                                <!-- Step Title -->
                                <div class="step-title">
                                    <h2 class="featured alt">Let's Know You?</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Steps Group -->
                        <div class="row text-center form-content">
                            <div class="col-12 p-0">
                                <ul class="progressbar">
                                    <li>Personal Details</li>
                                </ul>

                                <!-- Group 1 -->
                                <fieldset class="step-group">
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input id="first_name" type="text" name="first_name" data-minlength="3" class="form-control field-name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input id="surname" type="text" name="surname" data-minlength="3" class="form-control field-name" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input id="email" type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input id="phone" type="tel" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone Number (Whatsapp)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input id="company_name" type="text" name="company_name" data-minlength="3" class="form-control field-name" placeholder="Company's Name">
                                        </div>
                                    </div>
                                    <div class="col-12 input-group p-0">
                                        <a class="step-next btn primary-button">SUBMIT<i class="icon-arrow-right-circle left"></i></a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">

                        <!-- Step 1 -->
                        <div class="gallery">
                            <a class="step-image" data-poster="{{asset('_landing/assets/images/about-2.jpg')}}">
                                {{--<i class="play-video icon-control-play"></i>
                                <div class="mask-radius"></div>--}}
                                <img src="{{asset('_landing/assets/images/about-2.jpg')}}" class="fit-image" alt="Fit Image">
                            </a>
                        </div>

                        {{--<!-- Step 2 -->
                        <div class="gallery">
                            <a class="step-image" href="{{asset('_landing/assets/images/about-3.jpg')}}">
                                <img src="{{asset('_landing/assets/images/about-3.jpg')}}" class="fit-image" alt="Fit Image">
                            </a>
                        </div>--}}

                       {{-- <!-- Step 3 -->
                        <div class="gallery">
                            <a class="step-image" href="{{asset('_landing/assets/images/about-4.jpg')}}">
                                <img src="{{asset('_landing/assets/images/about-4.jpg')}}" class="fit-image" alt="Fit Image">
                            </a>
                        </div>--}}

                        <!-- Step 4 -->
                        <div class="gallery">
                            <a class="step-image" href="{{asset('_landing/assets/images/about-leverage.jpg')}}">
                                <img src="{{asset('_landing/assets/images/about-leverage.jpg')}}" class="fit-image" alt="Fit Image">
                            </a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
