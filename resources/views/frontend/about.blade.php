@extends('frontend.layouts.main')	
@section('main-container')

    <!-- feature_part start-->
    <section class="feature_part single_feature_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>A wonderful platform to experience our features and a way to get the bestest way to get familiar with eventor.  </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-face-smile"></i></span>
                            <h4>Better experience</h4>
                            <p>We have provided better services alog with verious extra surprices, Working with us is like working with close friends</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-lock"></i></span>
                            <h4>Security</h4>
                            <p>We do various paper agrement which provide you extra security on tour dream event</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-flag-alt"></i></span>
                            <h4>Reliabilty</h4>
                            <p>We have plartform which gives you more options of nearest vendor with better price. We are the only one ant first one to provide this type of service in Nepal.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{ url('frontend/assets/img/learning_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>What we providing to our vendors and clients</h2>
                        <p>Our project Eventor is based on an Event management system which basically provides 
                            an interface to interact with various events and venues that are happening around. It 
                            mainly works as a bridge between vendors and users. Our goal is not only to provide 
                            quality, but also to make it customized. </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">20</span>
                        <h4>All Packages</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">960</span>
                        <h4> All Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">89</span>
                        <h4>All Vendors</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">50</span>
                        <h4>All Subpackages</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Really good. Great job, I will definitely be ordering again! Nice work on your event management.</p>
                                        <h4>Binod Chaudhary</h4>
                                        <h5>Chaudhary Group</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/assets/img/binod.jpg')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>I was skeptical at first, but the Eventor team has proven me wrong. Eventor is a great partner that has helped me get my event planning business off the ground. I'm so glad I found them and recommend this company to anyone looking for an easy solution for their event needs!</p>
                                        <h4>Elon Musk</h4>
                                        <h5>CEO of SpaceX</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/assets/img/elon.jpg')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Eventor is the best pathfinding software that I have come across. It's incredibly fast, user-friendly and has a sleek design. You can easily see where all of your characters are situated on one screen. I would highly recommend this to anyone who wants to make their games more immersive!</p>
                                        <h4>Mark Zuckerberg</h4>
                                        <h5>CEO of META</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/assets/img/mark.jpg')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>I am using Eventor for event management and I can't imagine using any other system. It is clean, simple, and intuitive. It is easy to set up meetings, see when they are coming up and what the results of them were. I love how every detail of the event is in one place without having to look through multiple spreadsheets or files on my computer or</p>
                                        <h4>Jeff Bejos</h4>
                                        <h5>CEO of amajon</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/assets/img/jeff.jpg')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection
