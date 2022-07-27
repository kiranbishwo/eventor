@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section >
        <div class="container" style="margin-top: 150px;">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')
                    <div class="col-8">
                          <div class="row">
                              <div class="col-6">
                                  <h2>My Packages </h2>
                              </div>
                              <div class="col-6">
                                  <a href="addnew-package" class="btn_4 float-right " style="border-radius: 20px;">Add Package</a>
                              </div>
                          </div>
                        <hr>
                        <table class="table table-striped mt-4">
                            <thead class="text-white" style="background-color:#FF9100;">
                                <tr>
                                    <th>Id</th>
                                    <th>Package</th>
                                    <th>Date</th>
                                    <th>Amaunt</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123</td>
                                    <td>My package</td>
                                    <td>2022</td>
                                    <td>Rs. 4044</td>
                                    <td><span class="badge badge-danger">Expired</span></td>
                                    <td class="text-center"><button class="btn btn-sm bg-danger text-white rounded "><i class="ti-archive"></i></button><button class="btn btn-sm bg-success text-white rounded mx-3"><i class="ti-pencil-alt"></i></button><button class="btn btn-sm bg-primary text-white rounded "><i class="ti-info-alt"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>
        
    <!--::profile end::-->

@endsection
