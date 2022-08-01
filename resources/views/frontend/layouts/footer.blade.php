 <!-- footer part start-->
 <footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                    <p>Our project Eventor is based on an Event management system which basically provides an interface to interact with various events and venues that are happening around. It mainly works as a bridge between vendors and users. </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Important Links</h4>
                    @if(session()->has('vendorLoginId'))
                    <a class="text-muted" href="{{ url('/vendor-profile/') }}">Vendor Profile</a><br>
                    @else 
                    <a href="{{ url('vendor-login') }}" class="text-muted">Vandor Login</a><br><br>
                    @endif
                    
                    <a href="{{ url('aboutus') }}" class="text-muted">About Us</a><br><br>
                    <a href="{{ url('contactus') }}" class="text-muted">Contact Us</a><br><br>
                    <a href="{{ url('packages') }}" class="text-muted">Packages</a><br><br>
                    
                    
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        @foreach($setting as $setting)
                        <p><span> Address :</span> Apex College , Mid-Baneshwor kathmandu</p>
                        <p><span> Phone :</span> {{ $setting->phone}} | {{ $setting->mobile }}</p>
                        <p><span> Email : </span>{{ $setting->email }} </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script src="{{ url('frontend/assets/js/jquery-1.12.1.min.js')}}"></script> --}}
<!-- popper js -->
<script src="{{ url('frontend/assets/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{ url('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{ url('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{ url('frontend/assets/js/swiper.min.js')}}"></script>
<!-- swiper js -->
<script src="{{ url('frontend/assets/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{ url('frontend/assets/js/owl.carousel.min.js')}}"></script>
{{-- <script src="{{ url('frontend/assets/js/jquery.nice-select.min.js')}}"></script> --}}
<!-- swiper js -->
<script src="{{ url('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{ url('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ url('frontend/assets/js/waypoints.min.js')}}"></script>
<!-- custom js -->
<script src="{{ url('frontend/assets/js/custom.js')}}"></script>

@yield('script')

</body>

</html>