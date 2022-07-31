<div class="col-md-4 text-center">
    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
    <h3 class="font-weight-bold">{{ Session::get('name') }}</h3>
    {{-- {{ url('/profile/'.Session::get('loginId') ) }} --}}
    <b>User</b><br>
    <p class="text-black-50">{{ Session::get('email') }}</p>
    <div class="row login_nav border">
        <a href="{{ url('user-profile ') }}" class="{{ "user-profile"== request()->path()   ? "active" : "" }}"">Profile</a>
        <a href=" {{ url('user-update-profile') }}" class="{{ "user-update-profile"== request()->path()  ? "active" : "" }}" >Update Profile</a>
        <a href=" {{ url('user-change-password') }}" class="{{ "user-change-password"== request()->path() ? "active" : "" }}">Change Password</a>
        <a href="{{ url('user-logout') }}">logout</a>
    </div>
</div> 