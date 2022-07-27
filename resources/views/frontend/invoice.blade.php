@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top:150px">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')

                    <div class="col-8">
                          <div class="row">
                              <div class="col-12">
                                  <h2>My Invoices </h2>
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
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>123</th>
                                    <th>My package</th>
                                    <th>2022</th>
                                    <th>Rs. 4044</th>
                                    <th><span class="badge badge-danger">Expired</span></th>
                                    <th><button class="rounded btn_4">Details</button></th>
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
