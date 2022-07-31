@extends('frontend.layouts.main')	
@section('main-container')

<!-- profile start-->
<section>
    <div class="container" style="margin-top:150px">
        <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row p-4">
                    @if($mode =='user')
                        @include('frontend.userProfile-sidenav')
                    @endif
                    @if($mode =='vendor')
                        @include('frontend.profile-sidenve')
                    @endif
                <div class="col-8">
                    <h2>My Profile</h2>
                    <hr>
                    <table class="table table-borderless mt-4">
                        <form action="">
                            @foreach($invoice as $invoice)
                                <tr>
                                    <td>Package Name</td>
                                    <td>:</td>
                                    <td>{{ $invoice->name }}</td>
                                </tr>
                                <tr>
                                    <td>Package Basic Price</td>
                                    <td>:</td>
                                    <td>{{ $invoice->price }}</td>
                                </tr>
                                <tr>
                                    <td>Package Category</td>
                                    <td>:</td>
                                    
                                     <td>{{ $invoice->category }}</td>
                                  
                                </tr>
                                <tr>
                                    <td>Chooser Subpackage id</td>
                                    <td>:</td>
                                    @php 
                                        $subpackage_idarr = explode(',',$invoice->subpackage_id)
                                    @endphp
                                     <td>{{ $invoice->subpackage_id }}</td>
                                  
                                </tr>
                                <tr>
                                    <td>Package Provided Services</td>
                                    <td>:</td>
                                    <td>
                                    @for( $i = 0 ; $i < count($invoice->service) ; $i++)
                                    {{ $invoice->service[$i]." | " }}
                                    @endfor
                                    </td>
                                    
                                </tr>
                                


                            @endforeach
                            @foreach($subpackage as $subpackage)
                            @for( $i = 0 ; $i < count($subpackage_idarr) ; $i++)
                                @if($subpackage_idarr[$i] == $subpackage->id)
                                <tr>
                                    <td>Subpackage Info</td>
                                    <td>:</td>
                                     <td>{{ $subpackage->name }} | Rs. {{ $subpackage->price }}</td>
                                        
                                </tr>
                                @endif
                            @endfor
                            @endforeach
                            <tr>
                                <td>Total Price</td>
                                <td>:</td>
                                    <td> Rs. {{ $invoice->amount }}</td>
                                    
                            </tr>
                            <tr>
                                <td>Buyind Date</td>
                                <td>:</td>
                                    <td> {{ $invoice->buy_date }}</td>
                                    
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td>:</td>
                                    <td> {{ $invoice->pmt_method }}</td>
                                    
                            </tr>
                            <tr>
                                <td>Booking Status</td>
                                <td>:</td>
                                <td>
                                @if($invoice->status=="Inactive") 
                                    <span class="badge badge-danger">{{ $invoice->status }}</span>
                                @else 
                                    <span class="badge badge-success">{{ $invoice->status }}</span>
                                @endif
                                </td>
                                    
                            </tr>
                            @if($mode=='vendor')
                                <td><a href="{{ url('invoice') }}" class="rounded btn_4" >Back</a></td>
                            @else
                                <td><a href="{{ url('user-profile') }}" class="rounded btn_4" >Back</a></td>
                            @endif
                            


                        </form>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>
    

@endsection
