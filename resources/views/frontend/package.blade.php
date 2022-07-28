@extends('frontend.layouts.main')	
@section('main-container')

<!--::review_part start::-->
<section class="special_cource  pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle mb-1 mt-4">
                    <h3>Search Packages</h3>
                </div>
            </div>
        </div>
            <form action=""  class="row justify-content-center my-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Package name'" placeholder = 'Enter Package name'>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">Select Category</option>
                            <option value="">Select Category</option>
                            <option value="">Select Category</option>
                            <option value="">Select Category</option>
                        </select>
                      </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="submit" id="submit" name="submit"class=" genric-btn primary circle w-100" value="Search">
                    </div>
                </div>
            </form>
            <div class="row justify-content-center mb-3">
                <div class="col-12">
                    <h2>Results :</h2>
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
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('frontend/assets/img/testimonial_img_1.png')}}" alt="#">
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
