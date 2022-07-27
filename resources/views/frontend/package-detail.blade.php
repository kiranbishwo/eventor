@extends('frontend.layouts.main')	
@section('main-container')

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 course_details_left">
                    <h3 class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, delectus.</h3>
                    <div class="main_image w-100">
                        <img class="img-fluid w-100" src="{{ url('frontend/assets/img/single_cource.png')}}" alt="" >
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Objectives</h4>
                        <div class="content">
                            When you enter into any new area of science, you almost always find yourself with a
                            baffling new language of
                            technical terms to learn before you can converse with the experts. This is certainly
                            true in astronomy both in
                            terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                            the most prevalent
                            being the telescope.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <h4>Basic Information</h4>
                            <hr>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Package Name</p>
                                    <span class="color">George Mathews</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Package Charge </p>
                                    <span>$230</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Available Seats </p>
                                    <span>15</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Time </p>
                                    <span>1 day</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Status </p>
                                    <span>Available</span>
                                </a>
                            </li>
                            <div class="col-12 p-2 rounded" style="background-color: #F69504;">
                                <h4 class="m-0 text-white">Customize Package</h4>
                            </div>
                            <hr >
                            <form action="" class="row">
                                <div class="col-md-4">
                                    <input class="form-control" name="name" id="name" type="date">
                                   
                                </div>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Address</option>
                                        <option value="">Select Category</option>
                                        <option value="">Select Category</option>
                                        <option value="">Select Category</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" id="submit" name="submit"class="rounded btn_4 w-100" value="Search Vendors">
                                </div>
                            </form>
                            <li>
                                <h4 class="mb-2" style="color: #ED390F;">Transportation Options</h4>
                                <div class="row">
                                    <label for="vendor"  class="col-6 "  >
                                        <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="p-3">
                                            <h5>Vendor package name</h5>
                                            <a href="" class="text-muted"> <i class="ti-user"></i> Vendors Name</a>
                                            <p class="text-bold h3">$45</p>

                                            <div class="row">
                                                <div class="col-3 text-center mt-2">
                                                    <input type="radio" name="vendor" id="vendor"  style="transform: scale(2.5); ">
                                                </div>
                                                <div class="col-9 text-right">
                                                    <button data-toggle="modal" data-target="#exampleModalCenter" class="rounded btn_4">Vendor Info</button>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <label for="vendor"  class="col-6 "  >
                                        <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="p-3">
                                            <h5>Vendor package name</h5>
                                            <a href="" class="text-muted"><i class="ti-user"></i> Vendors Name</a>
                                            <p><i class="ti-location-pin"></i>Address goes here</p>
                                            <p class="text-bold h3">$45</p>

                                            <div class="row">
                                                <div class="col-3 text-center mt-2">
                                                    <input type="radio" name="vendor" id="vendor"  style="transform: scale(2.5); ">
                                                </div>
                                                <div class="col-9 text-right">
                                                    <button data-toggle="modal" data-target="#exampleModalCenter" class="rounded btn_4">Vendor Info</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>
                            </li>
                            <hr>
                            <li>
                                <h4 class="mb-2" style="color: #ED390F;">Transportation Options</h4>
                                <div class="row">
                                    <label for="vendor1" class="col-6 ">
                                        <div  class="p-3" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" >
                                            <h5>Vendor package name</h4>
                                            <a href="" class="text-muted">Vendors Name</a>
                                            <p class="text-bold h3">$45</p>
                                            <div class="row">
                                                <div class="col-3 text-center mt-2">
                                                    <input type="radio" name="vendor" id="vendor1"  style="transform: scale(2.5); ">
                                                </div>
                                                <div class="col-9 text-right">
                                                    <a href="" class="rounded btn_4">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <label for="vendor"  class="col-6 "  >
                                        <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="p-3">
                                            <h5>Vendor package name</h5>
                                            <a href="" class="text-muted">Vendors Name</a>
                                            <p class="text-bold h3">$45</p>

                                            <div class="row">
                                                <div class="col-3 text-center mt-2">
                                                    <input type="radio" name="vendor" id="vendor"  style="transform: scale(2.5); ">
                                                </div>
                                                <div class="col-9 text-right">
                                                    <a href="" class="rounded btn_4">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Total Price </p>
                                    <span>Rs. 5000</span>
                                </a>
                            </li>

                        </ul>
                        <button data-toggle="modal" data-target="#paymentmodel" class="btn_1 d-block w-100">Enroll the course</button>
                    </div>

                    
                </div>

                
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
    <!-- Modal vendor info-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Vendor Package name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <table class=" w-100">
                <tr>
                    <td class="w-25">Vendor Name</td><td>:</td><td>ksjdkjs skjdhsd <a href=""class="badge bg-primary text-white">See Vendors Profile</a></td>
                </tr>
                <tr>
                    <td>Price</td><td>:</td><td>Rs. 822</td>
                </tr>
                <tr>
                    <td>Unavailabl Dates</td><td>:</td><td>2022-2-2</td>
                </tr>
                <tr>
                    <td>Description</td><td>:</td><td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam neque, animi laboriosam sequi odit velit ratione numquam sunt eveniet aut!</td>
                </tr>
            </table>
            </div>
            <div class="modal-footer">
            <button type="button" class="rounded btn_4" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal vendor info end-->

  <!-- Modal payment method -->
    <div class="modal fade mt-5 bd-example-modal-lg" id="paymentmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Vendor Package name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('frontend/assets/img/payment/fonepay.png')}}" alt="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <h4>Payment Process</h4>
                        <hr>
                        <span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, maxime? Ullam, sunt? Beatae assumenda veritatis ad minus ab quibusdam rerum!</span><br>
                        <span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, maxime? Ullam, sunt? Beatae assumenda veritatis ad minus ab quibusdam rerum!</span><br>
                        <hr>
                        <h4>Or yo can pay via esewa</h4>
                        <hr>
                        <form class="text-center" >
                            <input type="submit" name="" class="btn bg-success btn-lg w-100 rounded text-white"  value="eSewa">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class=" btn_4 rounded" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal  payment method end-->
@endsection
