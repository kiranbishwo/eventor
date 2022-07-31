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

                                @php 
                                    $sub_id = array();
                                @endphp
                                @foreach($subpackage as $subpackage)
                                    @php
                                        array_push($sub_id,$subpackage->subid);
                                    @endphp
                                @endforeach
                                @php
                                    $subpackage_count = count($sub_id);
                                @endphp
                                @foreach($invoice as $invoice) 
                                    @php
                                        $subpackage_idarr = explode(',',$invoice->invSubid)
                                    @endphp
                                    @for($i=0;$i< $subpackage_count ; $i++)
                                        @if(in_array($sub_id[$i], $subpackage_idarr))
                                        <tr>
                                            <th>{{ $invoice->invid }}</th>
                                            <th>{{ $invoice->name }}</th>
                                            
                                            {{-- <th>{{ $invoice->pmt_method }}</th> --}}
                                            <th>{{ $invoice->buy_date }}</th>
                                            <th>Rs. {{ $invoice->amount }}</th>
                                            <th>
                                                @if($invoice->status=="Inactive") 
                                                    <span class="badge badge-danger">{{ $invoice->status }}</span>
                                                @else 
                                                    <span class="badge badge-success">{{ $invoice->status }}</span>
                                                @endif
                                            </th>
                                            <th><a href="{{ url('vendor-invoice-detail/'.$invoice->invid) }}" class="rounded btn_4" >Details</a></th>
                                        </tr>
                                        @endif
                                    @endfor
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
        
    <!--::profile end::-->

@endsection
