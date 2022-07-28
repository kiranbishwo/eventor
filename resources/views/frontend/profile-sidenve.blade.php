<div class="col-md-4 text-center">
    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
    <h3 class="font-weight-bold">Edogaru</h3>
    <b>Vendor</b><br>
    <span>My Category</span>
    <p class="text-black-50">edogaru@mail.com.my</p>

    <div class="row login_nav border">
        <a href="{{ url('vendor-profile') }}" class="{{ "vendor-profile"== request()->path() ? "active" : "" }}">Profile</a>
        <a href="{{ url('update-profile') }}" class="{{ "update-profile"== request()->path()  ? "active" : "" }}">Update Profile</a>
        <a href="{{ url('mypackages') }}" class="{{ "mypackages"== request()->path() || "addnew-package"== request()->path() ? "active" : "" }}">My Packages</a>
        <a href="{{ url('invoice') }}" class="{{ "invoice"== request()->path() ? "active" : "" }}">My Invoices</a>
        <a href="{{ url('change-password') }}" class="{{ "change-password"== request()->path() ? "active" : "" }}">Change Password</a>
        <a href="vendor-login">logout</a>
    </div>
</div>