@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container" style="margin-top:150px">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('frontend/assets/img/payment/fonepay.png')}}" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <h4>Payment Process</h4>
                <hr>
                
                <span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, maxime? Ullam, sunt? Beatae assumenda veritatis ad minus ab quibusdam rerum!</span><br>
                <span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, maxime? Ullam, sunt? Beatae assumenda veritatis ad minus ab quibusdam rerum!</span><br>
                <hr>
                <h4>Or yo can pay via esewa</h4>
                <hr>
                <form class="text-center" >
                    <button type="submit" name="" class="btn bg-success btn-lg w-100 rounded text-white" >eSewa</button>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
