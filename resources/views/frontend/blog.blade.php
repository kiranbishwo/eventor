@extends('frontend.layouts.main')	
@section('main-container')

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        @forelse($blog as $blog)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ url('images/'.$blog->photo) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ url('blog-detail/'.$blog->id) }} ">
                                        <h2>{{ $blog->title }}</h2>
                                    </a>
                                </div>
                            </article>
                        @empty
                        <div class="col-12 text-center ">
                            <h2 style="font-size:40px" class="text-white bg-danger alert">Opps!!! No Blog found.</h2>
                        </div>
                            
                        @endforelse

                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                       

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach($blogs as $blogs)
                                <div class="media post_item">
                                    <img src="{{ url('images/'.$blogs->photo) }}" alt="post" width="100">
                                    <div class="media-body">
                                        <a href="blog-detail">
                                            <h5>{{ $blogs->title }}</h5>
                                        </a>
                                        <p>{{ $blogs->created_at }}</p>
                                    </div>
                                </div>
                            {{-- <div class="col-12 text-center ">
                                <h4 style="font-size:20px" class="text-white bg-danger alert">Opps!!! No Blog found.</h4>
                            </div> --}}
                                
                            @endforeach
                            
                        </aside>
                      


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
