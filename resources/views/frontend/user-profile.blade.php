@extends('frontend.layouts.main')	
@section('main-container')

<!-- profile start-->
<section>
    <div class="container" style="margin-top:150px">
        <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row p-4">
                @include('frontend.userProfile-sidenav')
                <div class="col-8">
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
                    <h2>My Invoices</h2>
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
                            @foreach($invoice as $invoice)
                            <tr>
                                <th>{{ $invoice->id }}</th>
                                <th>{{ $invoice->name }}</th>
                                <th>{{ $invoice->buy_date }}</th>
                                <th>Rs. {{ $invoice->amount }}</th>
                                <th>
                                    @if($invoice->status=="Inactive") 
                                        <span class="badge badge-danger">{{ $invoice->status }}</span>
                                    @else 
                                        <span class="badge badge-success">{{ $invoice->status }}</span>
                                    @endif
                                </th>
                                <th><a href="{{ url('user-invoice-detail/'.$invoice->id) }}" class="rounded btn_4" >Details</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>
    

@endsection
