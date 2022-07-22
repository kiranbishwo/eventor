
@extends('backend.layouts.main')	
@section('main-container')	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Booking Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="booking">Booking</a></li>
                            <li class="breadcrumb-item"><a href="#!">Booking Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Booking Details</h5>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="w-25"><b>User Name</b></td>
                                    <td>Binod Chaudhari</td>
                                    <td class="w-25"><b>Package Name</b></td>
                                    <td>Everest Trek</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Mobile</b></td>
                                    <td>9854521545</td>
                                    <td class="w-25"><b>Email</b></td>
                                    <td>binod@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Country</b></td>
                                    <td>USA</td>
                                    <td class="w-25"><b>Address</b></td>
                                    <td>USA DC</td>
                                </tr>
                               
                                <tr>
                                    <td class="w-25"><b>D.O.B</b></td>
                                    <td>2000-1-1</td>
                                    <td class="w-25"><b>Passport Number</b></td>
                                    <td>1241-5215-5451-4547</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Passport Issued Date</b></td>
                                    <td>2020-2-2</td>
                                    <td class="w-25"><b>Passport Expiring Date</b></td>
                                    <td>2020-2-17</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Passport Place to issue</b></td>
                                    <td>USA</td>
                                    <td class="w-25"><b>Group Size</b></td>
                                    <td>2+</td>
                                </tr>

                                <tr>
                                    <td class="w-25"><b>Duration</b></td>
                                    <td>15 Days</td>
                                    <td class="w-25"><b>Group Size</b></td>
                                    <td>2+</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Price</b></td>
                                    <td>$ 2000</td>
                                    <td class="w-25"><b>Payment Type</b></td>
                                    <td>Visa</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Payment Status</b></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td class="w-25"><b>Event Status</b></td>
                                    <td><span class="badge badge-success">Running</span></td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Event Starting Date</b></td>
                                    <td>2020-2-2</td>
                                    <td class="w-25"><b>Event Ending Date</b></td>
                                    <td>2020-2-17</td>
                                </tr>
                                
                            
                            </tbody>
                        </table>
                  <div class="row pl-4">
                      <a href="booking" class="btn btn-danger">Back</a>
                  </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection