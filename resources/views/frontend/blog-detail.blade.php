@extends('frontend.layouts.main')	
@section('main-container')

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ url('images/'.$blog->photo) }}" alt="">
                </div>
                <div class="blog_details">
                   <h1>{{ $blog->title }}</h1>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                      <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                   </ul>
                   <?php  echo $blog->content; ?>
                     
                </div>
             </div>
          </div>

          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                   <form action="#">
                      <div class="form-group">
                         <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                            <div class="input-group-append">
                               <button class="btn" type="button"><i class="ti-search"></i></button>
                            </div>
                         </div>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                   </form>
                </aside>
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Category</h4>
                   <ul class="list cat-list">
                      <li>
                         <a href="#" class="d-flex">
                            <p>Resaurant food</p>
                            <p>(37)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Travel news</p>
                            <p>(10)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Modern technology</p>
                            <p>(03)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Product</p>
                            <p>(11)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Inspiration</p>
                            <p>(21)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Health Care</p>
                            <p>(21)</p>
                         </a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">Recent Post</h3>
                   @foreach($blogs as $blogs)
                   <div class="media post_item">
                      <img src="{{ url('images/'.$blogs->photo) }}" alt="post" width="80">
                      <div class="media-body">
                         <a href="{{ url('blog-detail/'.$blogs->id) }}">
                            <h3>{{ $blogs->title }}</h3>
                         </a>
                         <p>{{ $blogs->created_at }}</p>
                      </div>
                   </div>
                   @endforeach
                </aside>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================Blog Area end =================-->

@endsection
