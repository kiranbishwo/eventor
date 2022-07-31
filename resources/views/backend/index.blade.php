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
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            

            <!-- prject ,team member start -->
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Revenue</h5>
                        <h2>Rs. {{ $revenue }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Packages</h5>
                        <h2>{{ $count_package }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Booking</h5>
                        <h2>{{ $count_booking }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total User</h5>
                        <h2>{{ $count_user }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Vendor</h5>
                        <h2>{{ $count_vendor }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Subpackages</h5>
                        <h2>{{ $count_subpkg }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Blogs</h5>
                        <h2>{{ $count_blog }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card table-card">
                    <div class="card-header ">
                        <h5>Total Employee</h5>
                        <h2>{{ $count_team }}</h2>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
