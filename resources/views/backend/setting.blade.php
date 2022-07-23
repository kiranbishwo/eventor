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
                            <h5 class="m-b-10">Setting</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Setting</a></li>
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
                                <h5>Settings</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ url('editSetting/1') }}" class="btn btn-primary">Edit Contents</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <table class="table">
                            @foreach($setting as $setting)
                            <tbody>
                                <tr>
                                    <td class="w-25"><b>Brand</b></td>
                                    <td>{{$setting['brand']}}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Phone</b></td>
                                    <td>{{$setting['phone']}}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Mobile</b></td>
                                    <td>{{$setting['mobile']}}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Email</b></td>
                                    <td>{{$setting['email']}}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Metatext</b></td>
                                    <td>{{$setting['metatext']}}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Meta Keyword</b></td>
                                    <td>{{$setting['metakey']}}</td>
                                </tr>
                                
                            
                            </tbody>
                            @endforeach
                        </table>
                  

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


  @endsection