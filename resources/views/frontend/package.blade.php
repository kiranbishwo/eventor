@extends('frontend.layouts.main')	
@section('main-container')

<!--::review_part start::-->
<section class="special_cource  pt-5 mt-5">
    <div class="container">
            
            <div class="row justify-content-center mb-3">
                <div class="col-12">
                    <h2>Packages :</h2>
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
                            <a href="{{ url('packagedetail/'.$package->id) }}">
                                <h3 class="mt-2">{{ $package->name }}</h3>
                            </a>
                            <p  style="color: #0C2E60;"><span class="h3 bold ">Rs. {{ $package->price }}</span> &nbsp;&nbsp;<span><del>Rs100</del></span></p>
                            
                            <div class="row justify-content-around mt-3">
                                <a href="{{ url('packagedetail/'.$package->id) }}" class="col-5 genric-btn primary circle w-50" >Explore</a>
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
