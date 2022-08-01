@extends('frontend.layouts.main')	
@section('main-container')

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                @if(session('success'))
                    <div class="alert bg-success text-white col-12 text-center">{{session('success')}}</div>
                @endif
                @if(session('error'))
                    <div class="alert bg-danger text-white col-12 text-center">{{session('error')}}</div>
                @endif
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 course_details_left">
                    <h3 class="mb-3">{{ $package->name }}</h3>
                    <div class="main_image w-100">
                        <img class="img-fluid w-100" src="{{ url('frontend/assets/img/single_cource.png')}}" alt="" >
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Description</h4>
                        <div class="content">
                            {{ $package->content }}
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
                                    <span class="color">{{ $package->name }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Package Charge </p>
                                    <span>Rs. {{ $package->price }}</span>
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
                            
                            {{-- {{ $subpackage['package'] }} --}}
                            @foreach ($package->service as $service)
                            <li>
                                <h4 class="mb-2" style="color: #ED390F;"> {{ $service }}</h4>
                                <div class="row">
                                @foreach ($package->subpackage as $subpackage) 
                                        @if($subpackage->vendor->service == $service)
                                        
                                            <label for="vendor"  class="col-6 ">
                                                <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="p-3">
                                                    <h5>{{ $subpackage->name }}</h5>
                                                    <a href="" class="text-muted"> <i class="ti-user"></i> {{ $subpackage->vendor->name }}</a><br>
                                                    <a href="" class="text-muted"> <i class="ti-pin"></i> {{ $subpackage->vendor->address }}</a>
                                                    <p class="text-bold h3">Rs. {{ $subpackage->price }}</p>
        
                                                    <div class="row">
                                                        <div class="col-3 text-center mt-2">
                                                            <input type="radio" data-price="{{ $subpackage->price }}" data-subpackage="{{ $subpackage->id }}"  class="radiobtn-click" name="{{ $service }}" id="{{ 'vendor-'.$subpackage->id }}"  style="transform: scale(2.5); ">
                                                        </div>
                                                        <div class="col-9 text-right">
                                                            <button data-id="{{ $subpackage->id }}" data-location="{{ $subpackage->vendor->address }}" data-name="{{ $subpackage->vendor->name }}"   class="rounded btn_4 subpackage-info">Vendor Info</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                    
                                        @endif
                                @endforeach
                            </div>
                            </li>
                            @endforeach
                            <hr>
                            <li>
                                <h2 class="justify-content-between d-flex" href="#">
                                    <p>Total Price </p>
                                    <span>Rs. <span id="prev_total_price" style="display: none">{{ $package->price }}</span> <span id="total_price">{{ $package->price }}</span></span>
                                </h2>
                            </li>

                        </ul>
                        @if(session()->has('userLoginId'))
                            <button  class="btn_1 d-block w-100 enrole_package">Enroll the course</button>
                        @else 
                            <a class="btn_1 d-block w-100 " href="{{ url('user-login') }}">Enroll the course</a>
                        @endif
                        
                    </div>

                    
                </div>

                
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
    <!-- Modal subpackage info-->
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
                    <td class="w-25">Vendor Name</td><td>:</td><td id="vendor_name">ksjdkjs skjdhsd </td>
                </tr>
                <tr>
                    <td>Price</td><td>:</td><td>Rs. <span id="subpackage-price"></span></td>
                </tr>
                <tr>
                    <td>Status</td><td>:</td><td id="subpackage-status"></td>
                </tr>
                <tr>
                    <td>Description</td><td>:</td><td id="subpackage-content"></td>
                </tr>
                <tr>
                    <td>Address</td><td>:</td><td id="vendor_location"></td>
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
                        <form class="text-center" action="{{ url('payFonepay') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subpackage[]" id="subpackageValue">
                            <input type="hidden" name="totalAmount" id="amountValue">
                            <input type="hidden" name="packageId" id="packageValue">
                            <button type="submit" name="submit" class="btn bg-warning btn-lg w-100 rounded text-white" >Pay Via FonePay</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>Payment Process</h4>
                        <hr>
                        <span>If you want to pay via Fonepay please send payment invoice Screenshoot on watsapp or Viber Phone number: 9843019821 or you can directly contact us on 9825181136</span><br><br>
                        
                        <span>Or you can directly pay via esewa </span><br>
                        <hr>
                        <h4>Or yo can pay via esewa</h4>
                        <hr>
                        <form action="{{ url('payeSewapay') }}" method="POST" class="text-center">
                            @csrf
                            {{-- <span id="subpackageValue"></span>
                            <span id="amountValue"></span>
                            <span id="packageValue"></span> --}}
                            <input type="hidden" name="subpackage1[]" id="subpackageValue1">
                            <input type="hidden" name="totalAmount1" id="amountValue1">
                            <input type="hidden" name="packageId1" id="packageValue1">
                            <button type="submit" name="submit" class="btn bg-success btn-lg w-100 rounded text-white" >eSewa</button>
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
@section('script')
<script>
    
$(document).ready(function(){
    

    // view vendor info data
    $(document).on('click', '.subpackage-info', function(e){
    e.preventDefault();
    var subpackage_id = $(this).data('id');
    var subpackage_vendorname = $(this).data('name');
    var subpackage_location = $(this).data('location');
    console.log(subpackage_id);
    $("#exampleModalCenter").modal('show');
    $.ajax({
        type:'GET',
        url:"/package/subpackage-info/"+subpackage_id,
        success:function(data){
            console.log(data)
        $('#exampleModalLongTitle').text(data.subpackage.name);
        $('#subpackage-price').text(data.subpackage.price);
        $('#subpackage-status').text(data.subpackage.status);
        $('#subpackage-content').text(data.subpackage.content);
        $('#vendor_name').text(subpackage_vendorname);
        $('#vendor_location').text(subpackage_location);
        }
    });
    })

    // calculate total price
    $('.radiobtn-click').click(function(){
        let prev_total = parseInt($("#prev_total_price").text());
        // console.log(prev_total);

       
        let ele = document.getElementsByClassName('radiobtn-click');
        let total = 0, price = 0, final_total =0 ; 
        // console.log(total);
        for(i = 0; i < ele.length; i++) {
                
            if(ele[i].type="radio") {
                if(ele[i].checked){
                    price = $(ele[i]).data('price');
                    total = total+price;
                    final_total = (prev_total+total);
                }
            }
        }
        $("#total_price").text(final_total);
    })
    

        
        // delete
        $("#deleteForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            
        url: "{{ url('/blog/destroy') }}",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:'json',
        success : function(data){
            // console.log(data);
            // loadtable();
            if(data.status ==200){
                loadtable();
                Command: toastr["success"]("Success", "Blog Deleted Sucessfully");
            }else{
            // $('.error_list').text('error occurs.')
                Command: toastr["error"]("Failed", "Unable to delete");
            }
            $("#exampleModalLive").modal('hide');
        }
        });
    });

    $(document).on('click', '.enrole_package', function(e){
    e.preventDefault();
        let ele = document.getElementsByClassName('radiobtn-click');
        let subpackage = [];
        let sp= null; 
        let package_id = parseInt({{ $package->id }});
        // console.log(package_id);
        let total_price = parseInt($("#total_price").text());
        // console.log(total);
        for(i = 0; i < ele.length; i++) {
            if(ele[i].type="radio") {
                if(ele[i].checked){
                    sp = $(ele[i]).data('subpackage');
                    subpackage.push(sp);
                }
            }
        }
        console.log(subpackage);
        $("#paymentmodel").modal('show');
        $("#subpackageValue").val(subpackage);
        $("#amountValue").val(total_price);
        $("#packageValue").val(package_id);
        $("#subpackageValue1").val(subpackage);
        $("#amountValue1").val(total_price);
        $("#packageValue1").val(package_id);
        // $.ajax({
        //     type:'POST',
        //     url:"{{ url('collect_data/') }}",
        //     data:{amount:total_price, subpackage:subpackage,package_id:package_id},
        //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //     dataType:'json',
        //     success:function(data){
        //         console.log(data);
        //     }
        // });

    });
});
</script>
@endsection
