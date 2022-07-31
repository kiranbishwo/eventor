@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container" style="margin-top:150px">
        <div class="row d-flex   my-5">
            <div class="col-12">
                <h2>Gallery</h2>
            </div>
            @foreach($gallery as $gallery)
            <div class="col-md-3 p-2" >
                <a href="{{ url('images/'.$gallery['photo']) }}" target="_blank" class="w-100" >
                    <img src="{{ url('images/'.$gallery['photo']) }}" alt="" class="w-100" height="220" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                </a>
            </div>
            @endforeach
            
        </div>
    </div>

</section>

@endsection
