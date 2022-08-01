@extends('frontend.layouts.main')	
@section('main-container')


    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Make your events more fun!</h5>
                            <h1>Making Your events more familiar</h1>
                            <p>A family dinner, a wedding, a naming ceremony, a funeral. Because these kind of events are so commonplace in our lives, we tend to overlook their importance. Funnily, in a crisis like COVID-19 the things that people missed the most was their ability to catch up with loved ones.
                            </p>
                            <a href="{{ url('packages') }}" class="btn_1">View Package </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>A wonderful platform to experience our features and a way to get the bestest way to get familiar with eventor.  </p>
                        <a href="{{ url('aboutus') }}" class="btn_1">Read More</a>
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
                        
                        <a href="{{ url('aboutus') }}" class="btn_1">Read More</a>
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
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular Packages</p>
                        <h2>Special Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">

            @forelse($package as $package)
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <img src="{{ url('images/'.$package->photo) }}" class="w-100" alt="" height="250px">
                    <div class="special_cource_text p-4">
                        <!-- <a href="packagedetail" class="btn_4">Design  </a> -->
                        <p>{{ $package->category }}</p>
                        <a href="packagedetail">
                            <h3 class="mt-2">{{ $package->name }}</h3>
                        </a>
                        <p  style="color: #0C2E60;"><span class="h3 bold ">Rs. {{ $package->price }}</span> &nbsp;&nbsp;<span><del>Rs100</del></span></p>
                        
                        <div class="row justify-content-around mt-3">
                            <a href="purchase.html" class=" col-5 genric-btn primary circle w-50" >Buy</a>
                            <a href="packagedetail" class="col-5 genric-btn primary circle w-50" >Explore</a>
                        </div>
                    
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center ">
                <h2 style="font-size:40px" class="text-white bg-danger alert">Opps!!! No Package found.</h2>
            </div>
                
            @endforelse
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Our Advance Event Management System</h2>
                        <p>Eventor is an event management application which works as a bridge between clients and vendors by providing e-services in Kathmandu.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Become Our Vendor</h4>
                                    <p>Become our vendor and earn more money than your competitor.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Get Better Option</h4>
                                    <p>Be smart, find better packages for your events.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{ url('frontend/assets/img/advance_feature_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
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

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Poppular Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($blog as $blog)

                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-home-blog">
                            <div class="card">
                                <img src="{{ url('images/'.$blog->photo) }}" class="card-img-top" alt="blog" height="250px">
                                <div class="card-body">
                                    <p class="bold">Mt kiran</p>
                                    <a href="{{ url('blog-detail/'.$blog->id) }}">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                    </a>
                                    <a href="{{ url('blog-detail/'.$blog->id) }}" class="btn_4 float-right">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="col-12 text-center ">
                    <h2 style="font-size:40px" class="text-white bg-danger alert">Opps!!! No Blog found.</h2>
                </div>
                    
                @endforelse
                
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection
