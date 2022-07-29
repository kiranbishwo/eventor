@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')
                    <div class="col-md-8">
                          <div class="row">
                              <div class="col-12">
                                <h2>Update Package </h2>
                              </div>
                          </div>
                        <hr>
                        <table class="table table-striped mt-4">
                          <form id="actionForm">
                            <div class="form-group">
                                <label for="package">Select Main package</label>
                                <select name="package" id="package" class="form-select">
                                    <option selected disabled>Select Package</option>
                                    @foreach($package as $package)
                                    <option value="{{ $package->name }}" @if($package['name']==$subpackage['package']) selected @endif >{{ $package->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id="package-Error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your package name" value="{{ $subpackage['name'] }}">
                                <input type="hidden" name="addedBy" class="form-control" value="{{ Session::get('vendorLoginId') }}">
                                <input type="hidden" name="id" class="form-control" value="{{ $subpackage['id'] }}">
                                <span class="text-danger" id="name-Error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" min="0"  name="price" class="form-control" placeholder="Enter your peice" value="{{ $subpackage['price'] }}">
                                <span class="text-danger" id="price-Error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Discription</label>
                                <textarea name="content" id="content" class="textarea form-control" rows="3" placeholder="Enter short note abour your package">{{ $subpackage['content'] }}</textarea>
                                <span class="text-danger" id="content-Error"></span>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option selected disabled value="">Select status</option>
                                    <option value="Available" @if($subpackage['status']=="Available") selected @endif>Available</option>
                                    <option value="Not Available" @if($subpackage['status']=="Not Available") selected @endif>Not Available</option>
                                </select>
                                <span class="text-danger" id="status-Error"></span>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn_1 m-0" value="Update Package">
                                <a href="{{ url('mypackages') }}" class="btn btn-lg bg-secondary text-white" >Back</a>
  
                            </div>
                        </form>
                        <div id="response"></div>
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
@section('script')
<script>
$(document).ready(function(){
    // add vendor
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('update-vendorPackage') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            console.log(data);
            if(data.message){
                $('#response').html(' <p class="text-white text-center bg-success alert" > '+data.message+'</p>');
            }else{
                $('#response').html(' <p class="text-white text-center bg-danger alert" > Some error occurs</p>');
            }
        },
        error: function(response) {
              $('#name-Error').text(response.responseJSON.errors.name);
              $('#package-Error').text(response.responseJSON.errors.package);
              $('#content-Error').text(response.responseJSON.errors.content);
              $('#status-Error').text(response.responseJSON.errors.status);
              $('#price-Error').text(response.responseJSON.errors.price);
           }
        });

    });
    
});
</script>
@endsection