@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container" style="margin-top:150px">
        <div class="row justify-content-center">
            <div class="col-md-6 my-5">
                <h2 class="text-center" style="font-size:40px">Payment Conformation</h2>
                <img src="https://play-lh.googleusercontent.com/MRzMmiJAe0-xaEkDKB0MKwv1a3kjDieSfNuaIlRo750_EgqxjRFWKKF7xQyRSb4O95Y" alt="" class="w-100">
                <p class="text-center text-bold mb-2"> Are you sure you want to Buy this package. <a href="{{ url('packages/') }}">Cancel Payment</a></p>
                <form action="https://uat.esewa.com.np/epay/main" method="POST">
                    @php
                        $token = $data['user_id'].'-'.$data['package_id'].time().date('Y-m-d');
                        // session()->put('esewa_token',$token)
                        session(['esewa_token' => $token]);
                        session(['esewa_user_id' => $data['user_id']]);
                        session(['esewa_package_id' => $data['package_id']]);
                        session(['esewa_subpackage_id' => $data['subpackage_id']]);
                        session(['esewa_amount' => $data['amount']]);
                        
                    @endphp
                    @csrf
                    <input value="{{ $data['amount'] }}" name="tAmt" type="hidden">
                    <input value="{{ $data['amount'] }}" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="{{ $token }}" name="pid" type="hidden">
                    <input value="{{ $data['site_url'].'payment-verify?q=su' }}" type="hidden" name="su">
                    <input value="{{ $data['site_url'].'payment-verify?q=fu' }}" type="hidden" name="fu">
                    <input class="btn_1 d-block w-100 enrole_package" value="Confirm Payment" type="submit">
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
