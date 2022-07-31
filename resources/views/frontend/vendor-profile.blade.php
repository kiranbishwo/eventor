@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top:150px">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">

                    @include('frontend.profile-sidenve')
                    
                    <div class="col-8">
                        <h2>My Revenue</h2>
                        <hr>
                        <div class="row mb-4">
                          <div class="col-4">
                            <div class="text-center rounded p-3" style="background-color: #7DCE13;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                              <h4 class="text-white">Total <br> Revenue</h4>
                              <h2 class="text-white">Rs. 10000</h2>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center rounded p-3" style="background-color: #B93160;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                              <h4 class="text-white">Total <br> Packages</h4>
                              <h2 class="text-white">5</h2>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center rounded p-3" style="background-color: #1F4690;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                              <h4 class="text-white">Running <br> Packages</h4>
                              <h2 class="text-white">5</h2>
                            </div>
                          </div>
  
                        </div>
                        <h2>My Profile</h2>
                        <hr>
                        <table class="table table-borderless mt-4">
                            <form action="">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>:</td>
                                    <td>{{ $data->contact }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td>{{ $data->address }}</td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
  
                <!-- <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Change Password</h4>
                        </div>
                       <div class="d-flex justify-content-between align-items-center experience"></div><br>
                        <div class="col-md-12"><label class="labels">set password</label><input type="password" class="form-control" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">re enter password</label><input type="password" class="form-control" placeholder="" value=""></div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button"> submit</button></div>
  
                    </div>
                    
                </div> -->
            </div>
            </div>
            </div>
        </div>
    </section>
        
    <!--::profile end::-->

@endsection
